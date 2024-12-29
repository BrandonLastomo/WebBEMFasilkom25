<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        $user = Auth::user();
        // $user = Auth::peminjam();
        

        foreach ($guards as $guard) {
            if (Auth::guard('maba')->check()) {
                return redirect()->route('pkkmb');
            }

          
    
            if (Auth::guard($guard)->check()) {
                if ($user->hasAnyRole('Admin', 'Humas', 'Operator')) {
                    return redirect('admin');
                } elseif ($user->hasRole('User')) {
                    return redirect()->route('pkm-center');
                } 
                // elseif ($user->hasRole('Peminjam')) {
                // return redirect()->route('pinjam.login');
                // }
                // return redirect(RouteServiceProvider::HOME);
            }
        }
    
        return $next($request);
    }
}
