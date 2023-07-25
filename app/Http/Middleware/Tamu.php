<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Tamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('TesAuth')) {
            if ($request->session()->get('TesAuth')['role'] === 'admin') {
            // return redirect()->route('halaman_admin');
            return redirect()->route('halaman_admin');
        } else {
            return redirect()->route('halaman_sales');
        }
        }

        return $next($request);
    }
}
