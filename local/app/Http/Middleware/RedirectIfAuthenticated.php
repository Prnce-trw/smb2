<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('backoffice/dashboard');
        // }
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

        return $next($request);
    }
}
