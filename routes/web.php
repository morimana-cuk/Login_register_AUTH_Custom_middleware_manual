<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TesController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\SalesMiddleware;
use App\Http\Middleware\Tamu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('login');
})->name("halaman_login")->middleware(Tamu::class);

Route::post('/login',[LoginController::class,"login"])->name("auth_login");

Route::get("/register",[TesController::class,"halaman_register"])->name("halaman_register");
Route::post("/register/store",[TesController::class,"store"])->name("penyimpan");

Route::get('/login/admin',[AdminController::class,"halaman_admin"])->name('halaman_admin')->middleware([AuthLogin::class, AdminMiddleware::class]);
Route::get('/login/sales',[SalesController::class,"halaman_sales"])->name('halaman_sales')->middleware([AuthLogin::class,SalesMiddleware::class]);

Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// Auth::routes();
// Route::middleware(['auth','admin'])->group(function(){
//     Route::get('/login/admin',[AdminController::class,"halaman_admin"])->name('halaman_admin');
// });

// Route::middleware(['auth','sales'])->group(function(){
//     Route::get('/login/sales',[SalesController::class,"halaman_sales"])->name('halaman_sales');
// });

// Route::get('/register', function(){
//     return view('register');
// });




