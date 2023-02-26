<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');



Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {

    Route::get('/halaman-satu', [BerandaController::class,'halamansatu'])->name('halaman-satu');
   
});

Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function () {

    Route::get('/beranda', [BerandaController::class,'index']);
    Route::get('/halaman-dua', [BerandaController::class,'halamandua'])->name('halaman-dua');
    Route::get('/halaman-tiga', [BerandaController::class,'halamantiga'])->name('halaman-tiga');
});

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');