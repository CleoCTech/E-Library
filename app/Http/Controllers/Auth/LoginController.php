<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/login-redirect';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginRedirect(){
        // dd("uii4");
         if(Auth::user()->is_admin == 1){
             //dd("yes admin");
             if(Auth::user()->role == "Admin"){
                 //dd("yes admin2");
                 return redirect("/admin/users");
             }
             else if(Auth::user()->role == "Lecturer"){
                 return redirect("/dashboard");
             }
             else if(Auth::user()->role == "Editor"){
                 return redirect("/");
             }
             else if(Auth::user()->role == "Student"){
                 return redirect("/");
             }
         }else{
             //dd("uii");
             return redirect("/");
         }
     }
}