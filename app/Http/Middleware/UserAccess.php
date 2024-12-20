<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {
        if(auth()->user()->type == $userType){
            return $next($request);
        }

        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'manager') {
            return redirect()->route('the-dashboard-doctor');
        }else if (auth()->user()->type == 'user') {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('home');
        }

        return response()->json(['You do not have permission to access for this page.']);
    }
}
