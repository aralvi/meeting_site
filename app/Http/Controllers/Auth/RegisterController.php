<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Specialist;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'payment_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'payment_password' => ['required'],
            'payment_method' => ['required'],
            'business_name' => ['required', 'string'],
            'business_phone' => ['required', 'string'],
            'business_location' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'user_type' => 'specialist',
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'payment_password' => $data['password'],
            'payment_email'=>$data['payment_email'],
            'payment_method'=>$data['payment_method'],
            'status'=>'inactive'
        ]);

        $specialist = new Specialist();
        $specialist->user_id = $user->id;
        $specialist->category_id = $data['category_id'];
        $specialist->sub_category_id = json_encode($data['sub_category_id']);
        $specialist->business_phone = $data['business_phone'];
        $specialist->business_name = $data['business_name'];
        $specialist->business_location = $data['business_location'];
        $specialist->opening_hours = 123456789;
        $specialist->save();
        return $user;
    }
}
