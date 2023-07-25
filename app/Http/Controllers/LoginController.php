<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Account::all();

        foreach ($user as $value) {
            if($value->email === $request->email && Hash::check($request->password, $value->password )){
                $request->session()->put("TesAuth",$value);
                if ( $request->session()->get("TesAuth")['role']==="admin") {
                     return redirect()->route('halaman_admin');
                }else {
                      return redirect()->route('halaman_sales');
                }
            }
        }

        // dd(Auth::attempt($credentials));

        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     if ($user->role === 'admin') {
        //         // return $request->expectsJson();
        //         $request->session()->regenerate();
        //         return redirect()->route('halaman_admin');
        //     } elseif ($user->role === 'sales') {
        //         // $request->session()->regenerate();
        //         return redirect()->route('halaman_sales');
        //     }
        // }

        return redirect()
            ->route('halaman_login')
            ->with('error', 'email atau password salah');
    }

    public function logout(Request $request){
        $request->session()->remove('TesAuth');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('halaman_login');
    }
}
