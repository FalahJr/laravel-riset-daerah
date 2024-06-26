<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMasyarakat
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
        if ($request->session()->get('user')) {

            if ($request->session()->get('user')['role'] == 'Masyarakat') {
                return $next($request);
            } else {
                return redirect('login')->with('failed', 'Akses ditolak ! Anda bukan Masyarakat.');
            }
        }
        return redirect('login')->with('failed', 'Akses ditolak ! Anda bukan Masyarakat.');
    }
}
