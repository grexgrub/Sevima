<?php

namespace App\Http\Middleware;

use App\utiliti\Flasher;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Guru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('guru')->check()) {
            Flasher::setFlash('warning', 'silakan login terlebih dahulu', 'warning');
            return redirect()->route('guru.login');
        }
        return $next($request);
    }
}
