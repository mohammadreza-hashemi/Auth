<?php

namespace App\Http\Middleware;

use Closure;

class MusstBeAdministrator
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
        
        $user=$request->user();//har etelati ke az karber dari ro migire
        if($user && $user->email =='infos@mohammad.com'){
            
        return $next($request);
        }
        abort(503,'you must be admin');
    }
}
