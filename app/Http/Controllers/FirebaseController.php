<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\Chat;
use App\User;
use Carbon\Carbon;

class FirebaseController extends Controller
{

    public function index($id)
    {
        // $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('frontend.chat',compact(['id','user']));
    }

    public function store(Request $request) {
        if($request->hasFile('img'))
        {
            $imgName = time().'.'.$request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/firebase'), $imgName);
            $file ='img';
            $imgName = url('/images/firebase')."/".$imgName;
        }
        else
        {
            $file ='';
            $imgName = '';
        }
        
		$this->validate($request, [
			'name' => 'required'
		]);
		
		$input = $request->all();
		$sender = $input['sender'];
		$reciever = $input['reciever'];
		if(Chat::where('sender_id',$sender)->where('reciever_id',$reciever)->first() !=null)
		{
			$input['sender_reciever'] = Chat::where('sender_id',$sender)->where('reciever_id',$reciever)->first()->sender_reciever;
		}else if(Chat::where('sender_id',$reciever)->where('reciever_id',$sender)->first() !=null){
			$input['sender_reciever'] = Chat::where('sender_id',$reciever)->where('reciever_id',$sender)->first()->sender_reciever;
        }else{
			$input['sender_reciever'] = $sender.$reciever;
		}

		$input['ip'] = request()->ip();
		$input['type'] = 'chat';
		$input['sender_id'] = $sender;
		$input['reciever_id'] = $reciever;
		$input['sender_reciever'] = $input['sender_reciever'];
		$chat = Chat::create($input);
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri(config('services.firebase.database_url'))
        ->create();
        $database   =   $firebase->getDatabase();
        $createPost    =   $database
        ->getReference('chats')
        ->push([
            'id'=>$chat->id,
            'type' =>  $chat->type,
            'content'  =>  $chat->content,
            'name'=>$chat->name,
            'sender_id'=>$chat->sender_id,
            'reciever_id'=>$chat->reciever_id,
            'ip'=>$chat->ip,
            'sender_reciever'=>$chat->sender_reciever,
            'file_type'=>$file,
            'file_link'=>$imgName,
            'status'=>$chat->sender_reciever."unread",
            'created_at'=>$chat->created_at,
        ]);
        $reciever = User::where('id',$chat->reciever_id)->first();
        $this->fcm_notification($reciever->name,$chat->content,$reciever->fcm_token);
		return response()->json(['data' =>$createPost->getvalue()], 200);
	}

    public function save_token(Request $request){
        $user = User::findOrFail($request->user_id);
        $user->fcm_token = $request->fcm_token;
        $user->save();
        return response()->json([
            'success'=>true,
            'message'=>'User token updated successfully.'
        ]);
    }

    public function fcm_notification($name,$message,$token){
        $msg = array
              (
                'body'  => $message,
                'title' => $name,
                'receiver' => $name,
                'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                'sound' => 'mySound'/*Default sound*/
              );

        $fields = array
            (
                'to'        => $token,
                'notification'  => $msg,
                'priority'      =>'high'
            );

        $headers = array
            (
                'Authorization: key=' . config('services.firebase.server_key'),
                'Content-Type: application/json'
            );
        //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        return $result;
    }
    
    public function chatUserUpdate($id)
    {
        $t = time();
        $user = User::find($id);
        $user->last_login = $t + 10;
        if($user->save())
        {
            return response()->json(["old"=>$t,"next"=>$user->last_login]);
        }
        
    }
    
    public function chatUpdatedUsers($id)
    {
        $users = User::where('id','!=',$id)->get();
        $arr =[];
        foreach($users as $user)
        {
            $a = [];
            $a['id']=$user->id;
            $a['current']=time();
            $a['next']=$user->last_login;
            $a['status'] = Carbon::parse($user->last_login)->diffForHumans();
            $arr[] = $a;
        }
        return response()->json($arr);
    }
}
