<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has("user")){
            $user = $request->session()->get("user")[0];
            // dd($user);

            if($user->idUloga != 1){
                return redirect("/")->with("message", "MIDDLEWARE: NISTE ADMIN!!");
            }
        }
        else{
            return redirect("/")->with("message", "MIDDLEWARE: NISTE ADMIN!!");
        }
        return $next($request);
    }
}
