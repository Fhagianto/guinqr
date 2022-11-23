<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login');
          }
          $user = Auth::user();
        //   $role =$user->level;
        //   dd($role,$user->level,$user,$request,Auth::user()->level);
        //   if($user->level == $role){
        //     return $next($request);
        //   }
          if($user->level == "superadmin" ||$user->level =="admin"||$user->level == "useracara"||$user->level == "security"){
              return $next($request);
          }
        // dd($role);
        //   if ($user->level == 'superadmin') {
        //     return $next($request);
        //   } elseif ($user->level == 'admin') {
        //     return $next($request);
        //   } elseif ($user->level == 'security') {
        //     return $next($request);
        //   }elseif ($user->level == 'useracara') {
        //     return $next($request);
        //   }
            return redirect('login')->with('error',"Kamu Tidak ada akses");

    }
}
