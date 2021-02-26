<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
        
    // User role
    $role = Auth::user()->user_type; 
    
        // Check user role
        // switch ($role) {
        //     case 'superadmin':
        //             return '/admin';
        //         break;
        //     case 'owner':
        //             return '/stores/dashboard';
        //         break; 
        //     case 'new_user':
        //             return '/admin';
        //         break;
        //     default:
        //             return '/home'; 
        //         break;
        // }
        if(Auth::user()->user_type =='superadmin'){
            return '/admin';
        } elseif (Auth::user()->user_type =='owner'){
            return '/stores/dashboard';
        }  elseif (Auth::user()->user_type =='user'){
            return '/admin';
        }
         else {
            return '/home'; 
        }
    } 
}
