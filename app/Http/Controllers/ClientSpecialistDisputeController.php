<?php

namespace App\Http\Controllers;

use App\ClientSpecialistDispute;
use Illuminate\Http\Request;
use Validator;
use Auth;
class ClientSpecialistDisputeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function disputeAraise($project,$id){
        $id = decrypt($id);
        $project = decrypt($project);
        return view('frontend.client_specialist_dispute',compact('id','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = [
            'subject'=>'required',
            'comment'=>"required"
        ];
        if($request->hasFile('dispute_file')){
            $arr['dispute_file'] ='mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,mp4,avi,mov,wmv';
        }

        $validations = Validator::make($request->all(),$arr);

        if($validations->fails())
        {
            return response()->json(['success' => false, 'message' => $validations->errors()]);
        }

        if($request->hasFile('dispute_file')){
            if(in_array($request->dispute_file->extension(),['jpg','jpeg','png','gif','JPG','JPEG','PNG','GIF'])){
                $file_type = 'image';
            }else if(in_array($request->dispute_file->extension(),['mp4','avi','mov','wmv'])){
                $file_type = 'video';
            }
            
            $imgName = $request->project_id.'_'.time().'.'.$request->dispute_file->extension();
            $request->dispute_file->move(public_path('uploads/disputes'), $imgName);
            $file_link = url('/uploads/disputes')."/".$imgName;
        }else{
            $file_type ='';
            $file_link = '';
        }

        $dispute = new ClientSpecialistDispute();
        $dispute->project_id = $request->project_id;
        $dispute->project_type = $request->project_type;
        $dispute->sender_id=$request->sender_id;
        $dispute->reciever_id=$request->reciever_id;
        $dispute->subject = $request->subject;
        $dispute->comment = $request->comment;
        $dispute->file_type = $file_type;
        $dispute->file_link = $file_link;
        if($dispute->save())
        {
            return response()->json(['success' => true, 'message' =>"Your dispute has been added successfully"]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientSpecialistDispute  $clientSpecialistDispute
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispute = ClientSpecialistDispute::where('id',decrypt($id))->first();
        return view('frontend.client_specialist_dispute_show',compact('dispute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientSpecialistDispute  $clientSpecialistDispute
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientSpecialistDispute $clientSpecialistDispute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientSpecialistDispute  $clientSpecialistDispute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientSpecialistDispute $clientSpecialistDispute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientSpecialistDispute  $clientSpecialistDispute
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientSpecialistDispute $clientSpecialistDispute)
    {
        //
    }

    public function userDisputeNotifications(){
        $disputes = ClientSpecialistDispute::where('reciever_id',Auth::user()->id)->where('reciever_seen',0)->get();
        $arr =[];
        foreach($disputes as $dispute)
        {
            if($dispute->project_type=='appointments')
            {
                Auth::user()->user_type=='client'?$dispute->appointment->specialist->user->avatar!=''? $avatar=url('/').'/'.$dispute->appointment->specialist->user->avatar: $pro=url('/public/uploads/user/default.jpg'):$dispute->appointment->user->avatar!=''? $avatar=url('/').'/'.$dispute->appointment->user->avatar: $avatar=url('/public/uploads/user/default.jpg');
                Auth::user()->user_type=='client'?$username=$dispute->appointment->specialist->user->username :$username=$dispute->appointment->user->username;
                $a = [];
                $a['id'] = $dispute->id;
                $a['url'] = url('/disputes').'/'.$dispute->id;
                $a['subject']=$dispute->subject;
                $a['avatar']=$avatar;
                $a['username'] = $username;
                $arr[] = $a;
            }
        }
        return response()->json($arr);
        // return response()->json(['user'=])
    }
}
