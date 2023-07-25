<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use app\Models\data;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('TesAuth')['role'] === 'admin') {
            // return redirect()->route('halaman_admin');
            return $next($request);
        } else {
            return redirect()->route('halaman_sales');
        }
        return redirect()->route('halaman_login');
        // dd(Auth::user());
        // if (Auth::user()->role === 'admin') {
        //     return $next($request);
        // }

        // abort(404);

        // if (Auth::check() && Auth::user()->role === 'admin') {
        //     return $next($request);
        // }
        // return response()->json(['you dont have permision']);
        // if (Auth()->check() && Auth()->user()->role === 'admin') {
        //     return $next($request);
        //     // return redirect('/login/admin');
        // }

        // return redirect()
        //     ->route('halaman_login')
        //     ->with('error', 'akses di larang ');
    }
}
