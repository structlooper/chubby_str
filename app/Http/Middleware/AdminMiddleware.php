<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
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
        return $next($request); 
        if (Auth::User()->usertype == 'admin') {
            return "admin";
        }
        else{
            return redirect('/home');
        }    
    }
}
