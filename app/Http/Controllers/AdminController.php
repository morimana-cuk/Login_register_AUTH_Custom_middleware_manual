<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function halaman_admin()
    {
        return view('admin');
    }
}
