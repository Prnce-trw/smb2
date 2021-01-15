<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Socialite;
use App\User;

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
    protected $redirectTo = '/backoffice/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        //Attempt to log the user in
        if(Auth::guard('customer')->attempt(['email' => $request->email , 'password' => $request->password, 'user_status' => '2'] )){
            // if successful , then redirect to their intended location
            return redirect(url('/'));
         }elseif(Auth::guard('web')->attempt(['email' => $request->email , 'password' => $request->password, 'user_status' => '1' ])){
             return redirect(url('backoffice/dashboard'));
         }else{
             echo '<script language="javascript">';
             echo 'alert("ขออภัย ท่านไม่สามารถเข้าสู่ระบบได้");';
             echo 'window.history.back();';
             echo '</script>';
         }
    }

    public function authenticated(Request $request, $user) {
        $user->last_login_at = Carbon::now()->toDateTimeString();
        $user->last_login_ip = $request->getClientIp();
        $user->save();
    }
}
