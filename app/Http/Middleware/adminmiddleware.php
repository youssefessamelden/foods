<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()){
            if(auth()->user()->role == 'admin'){
                return $next($request);
            }elseif(auth()->user()->role == 'user'){
                return response('You are not allowed to enter this page');
            }else{
                return response('Error');
            }
        }else{
            return redirect()->route('login');
            // return response('please login');
        }
    }
}