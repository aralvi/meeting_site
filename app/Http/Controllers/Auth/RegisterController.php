<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Specialist;
use App\Client;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';


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
        $arr = [
                'name' => ['required', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ];

        if ($data['user_type']=='specialist')
        {
            $arr['payment_method'] = ['required'];
            $arr['business_name'] = ['required', 'string'];
            $arr['business_phone'] = ['required', 'string'];
            $arr['business_location'] = ['required', 'string'];
        }
        else if($data['user_type']=='client')
        {
            $arr['client_phone'] =['required', 'string'];
        }

        if($data['payment_method']=='stripe')
        {
            $arr['payment_name'] = ['required', 'string'];
            $arr['payment_birth_date'] = ['required'];
            $arr['payment_phone'] = ['required'];

        }
        else
        {
            $arr['payment_email'] = ['required', 'string', 'email', 'max:255', 'unique:users'];
        }

        return Validator::make($data, $arr);
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
            'user_type' => $data['user_type'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status'=>'inactive'
        ]);

        if($data['user_type'] =='specialist')
        {
            if(count(explode(',',$data['days'])) >0)
            {
                foreach (explode(',',$data['days']) as $key => $value)
                {
                    if($value =="saturday" || $value=='sunday')
                    {
                        $hours_arr[$value] = ['closed'];
                    }
                    else
                    {
                        $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
                    }
                   
                }
            }

            $specialist = new Specialist();
            $specialist->user_id = $user->id;
            $specialist->category_id = $data['category_id'];
            $specialist->sub_category_id = json_encode($data['sub_category_id']);
            $specialist->business_phone = $data['business_phone'];
            $specialist->business_name = $data['business_name'];
            $specialist->business_location = $data['business_location'];
            $specialist->payment_method = $data['payment_method'];
            if($data['payment_method']=='stripe' && $data['user_type'] !='client')
            {
                $specialist->payment_name = $data['payment_name'];
                $specialist->payment_birth_date = $data['payment_birth_date'];
                $specialist->payment_ssn = $data['payment_ssn'];
                $specialist->payment_phone = $data['payment_phone'];

            }
            else
            {
                $specialist->payment_email = $data['payment_email'];
            }
            $specialist->opening_hours = json_encode($hours_arr);

            $specialist->save();
        }
        else if($data['user_type'] =='client')
        {
            $client = new Client();
            $client->user_id = $user->id;
            $client->business_phone = $data['client_phone'];
            $client->save();
        }
        
        return $user;
    }
}
