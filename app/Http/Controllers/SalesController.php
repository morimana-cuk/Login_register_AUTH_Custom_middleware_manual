<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
   
    public function halaman_sales(){
        return view('sales');
    }
}
