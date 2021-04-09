<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $uri = explode('/',$request->path());
        $userID=(int)$uri[1];
        // dd($userID);
        // dd($userID,Auth::id());



       

        if (Auth::user()->role_id ==1 || Auth::user()->role_id ==2 || (Auth::user()->role_id ==3 && $userID==Auth::id()) ||(Auth::user()->role_id ==4 && $userID==Auth::id()) ) {
        //    dd($userID);

            return $next($request);
       

        } else {
            return redirect()->back();
        }
        
    }
}
