<?php

namespace App\Http\Controllers;

use App\DisputeReply;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\ClientSpecialistDispute;

class DisputeReplyController extends Controller
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
            'reply'=>"required"
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
        Auth::user()->user_type=='client'?$user_type='client':$user_type='specialist';
        $dispute = new DisputeReply();
        $dispute->dispute_id = $request->dispute_id;
        $dispute->user_type = $user_type;
        $dispute->sender_id=Auth::user()->id;
        $dispute->reciever_id=User::where('user_type','admin')->first()->id;
        $dispute->reply = $request->reply;
        $dispute->file_type = $file_type;
        $dispute->file_link = $file_link;
        if($dispute->save())
        {
            return response()->json(['success' => true, 'message' =>"Your dispute reply has been added successfully"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DisputeReply  $disputeReply
     * @return \Illuminate\Http\Response
     */
    public function show(DisputeReply $disputeReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DisputeReply  $disputeReply
     * @return \Illuminate\Http\Response
     */
    public function edit(DisputeReply $disputeReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DisputeReply  $disputeReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisputeReply $disputeReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DisputeReply  $disputeReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisputeReply $disputeReply)
    {
        //
    }

    public function replies(Request $request){
        $dispute=ClientSpecialistDispute::where('id',$request->dispute)->first();
        $replies = $dispute->replies()->where('sender_id',$request->sender)->orWhere('reciever_id',$request->sender)->get();
        return response()->json(['html'=>view('partials.frontend.dispute_replies',compact('replies'))->render()]);
    }
}
