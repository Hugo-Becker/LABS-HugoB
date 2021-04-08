<?php

namespace App\Http\Middleware;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Auth;

class isAuthor
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
        $article=Article::find($uri[1]);
        $aAuthorID=$article->users->id;

        if (Auth::user()->role_id ==1 || Auth::user()->role_id ==2 || ($aAuthorID==Auth::id() && Auth::user()->role_id ==3 )) {
            return $next($request);

        } else {
            return redirect()->back();
        }
        


    }
}
