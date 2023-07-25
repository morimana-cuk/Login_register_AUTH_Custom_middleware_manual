<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TesController extends Controller
{
    //

    public function halaman_register()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        // dd($request);
        $ValidateData = $request->validate([
            'username' => 'required|max:15',
            'email' => 'required|unique:account|max:35',
            'password' => 'required|min:3',
        ]);

        $hashedPassword = Hash::make($ValidateData['password']);

        

        $data = new User([
            'username'=>$ValidateData['username'],
            'email'=>$ValidateData['email'],
            'password'=>$hashedPassword,
            'role'=>$request->role,
        ]);

        $data->save();

        return redirect()->route('halaman_login')->with('success', 'Registration successful. Please log in.');
    }
}
