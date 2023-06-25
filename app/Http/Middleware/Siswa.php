<?php

namespace App\Http\Middleware;

use App\utiliti\Flasher;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Siswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('siswa')->check()) {
            Flasher::setFlash('warning', 'silakan login terlebih dahulu', 'warning');
            return redirect()->route('login.default');
        }
        return $next($request);
    }
}
