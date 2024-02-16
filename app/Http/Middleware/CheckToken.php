<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $reqFor = explode("/",$request->getPathInfo());
      if($reqFor[1] == 'admin'){
        $user = Auth::guard('admin')->user() ;
        if(session('adminData') && session('adminData')['remember_token'] == $user['remember_token'] ){
          return $next($request);
        }else {
          session()->forget('adminData');

            // session()->flush();
            return redirect("/admin/login");
        }
      }else{
        $user = Auth::guard('web')->user() ;
        if(session('Alldata') && session('Alldata')['remember_token'] == $user['remember_token'] ){
            return $next($request);
        }else {
          session()->forget('Alldata');
            // session()->flush();
            return redirect("/login");
        }
      }  
    }
}
