<?php

namespace App\Http\Middleware;

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
        switch ($guard) {
            case 'trafficpolice':
            if (Auth::guard($guard)->check()) {
                return redirect('/trafficpolice');
            }
            break;

            case 'insurancepolicy':
            if (Auth::guard($guard)->check()) {
                return redirect('/insurancepolicy');
            }
            break;

            case 'servicecenter':
            if (Auth::guard($guard)->check()) {
                return redirect('/servicecenter');
            }
            break;

            case 'rto':
            if (Auth::guard($guard)->check()) {
                return redirect('/rto');
            }
            break;

            default:
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            break;
        }
        

        return $next($request);
    }
}
