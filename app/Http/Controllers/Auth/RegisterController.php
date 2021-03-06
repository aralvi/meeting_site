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
                'username' => ['bail','required', 'unique:users'],
                'name' => ['bail','required', 'string'],
                'email' => ['bail','required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['bail','required', 'string', 'min:6', 'confirmed'],
                'country' => ['bail','required'],
            ];

        if ($data['user_type']=='specialist')
        {
            $arr['payment_method'] = ['bail','required'];
            $arr['business_phone'] = ['bail','required', 'string'];
        }
        else if($data['user_type']=='client')
        {
            $arr['client_phone'] =['bail','required', 'string'];
        }

        if($data['payment_method']=='stripe' && $data['user_type'] !='client')
        {
            $arr['payment_first_name'] = ['bail','required', 'string'];
            $arr['payment_last_name'] = ['bail','required', 'string'];
            $arr['account_number'] = ['bail','required'];
            $arr['payment_birth_date'] = ['bail','required'];
            $arr['routing_number'] = ['bail','required'];

        }
        else if($data['payment_method']!='stripe' && $data['user_type'] !='client')
        {
            $arr['payment_email'] = ['bail','required', 'string', 'email', 'max:255', 'unique:users'];
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
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
            'status'=>'inactive'
        ]);

        if($data['user_type'] =='specialist')
        {
            if(count(explode(',',$data['days'])) >0)
            {
                foreach (explode(',',$data['days']) as $key => $value)
                {
                    $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
                    // if($value =="saturday" || $value=='sunday')
                    // {
                    //     $hours_arr[$value] = ['closed'];
                    // }
                    // else
                    // {
                    //     $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
                    // }
                   
                }
            }

            $specialist = new Specialist();
            $specialist->user_id = $user->id;
            $specialist->category_id = $data['category_id'];
            $specialist->sub_category_id = json_encode($data['sub_category_id']);
            $specialist->business_phone = $data['business_phone'];
            $specialist->public_profile = $data['public_profile'];
            $specialist->payment_method = $data['payment_method'];
            if($data['payment_method']=='stripe' && $data['user_type'] !='client')
            {
                $specialist->payment_first_name = $data['payment_first_name'];
                $specialist->payment_last_name = $data['payment_last_name'];
                $specialist->payment_birth_date = $data['payment_birth_date'];
                $specialist->payment_ssn = $data['payment_ssn'];
                $specialist->account_number = $data['account_number'];
                $specialist->routing_number = $data['routing_number'];

            }
            else if($data['payment_method']!='stripe' && $data['user_type'] !='client')
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
