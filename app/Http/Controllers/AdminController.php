<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageUploadTrait;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use ImageUploadTrait;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $admin = Admin::where('id',decrypt($id))->first();
        return view('admin.admins.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'first_name'              => 'required',
            'last_name'        => 'required',
        ]);

        if($validations->fails()){
            return response()->json(['success' => false, 'message' => $validations->errors()]);
        }

        // $admin = Admin::find($id);
        $user = User::find($admin->user_id);

        if($request->password_change_chk)
        {
            if(Hash::check($request->old_password,$user->password))
            {
                $vali = Validator::make($request->all(),[
                    'new_password'=> 'bail | required | min:8 | confirmed',
                ]);

                if($vali->fails()){
                    return response()->json(['success' => false, 'message' => $vali->errors()]);
                }

                $user->password = Hash::make($request->new_password);
            }
            else
            {
                return response()->json(['success' => false, 'message' =>['Old password could not be matched!']]);
            }
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
       
        if($request->hasFile('img'))
        {
            $user->img = $this->uploadImage('images/admin/uploads/users',$request);
        }
        $user->save();

        if ($admin->save()){
            return response()->json(['success' => true, 'message' =>"Admin profile has been updated successfully"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
