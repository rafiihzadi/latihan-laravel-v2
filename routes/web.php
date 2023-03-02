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

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

<<<<<<< HEAD
Route::get('postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth:user','cekLevel:admin']], function () {
    Route::get('/halaman-satu', 'BerandaController@halamansatu')->name('halaman-satu');
=======
// Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
  
>>>>>>> 70b11ef35ee4e24c2fbf0b286a21521bc8907952
   
// });

<<<<<<< HEAD
    Route::group(['middleware' => ['auth:user,pengguna', 'cekLevel:admin,user,mhs']], function () {
        route::get('/beranda', 'BerandaControllerindex');
        route::get('/halaman-dua', 'BerandaController@index')->name('halaman-dua');
        route::get('/exportpegawai', 'PegawaiController@pegawaiexport')->name('exportpegawai');
        route::post('/importpegawai', 'PegawaiController@pegawaiimportexcel')->name('importpegawai');


});
    Route::group(['middleware' => ['auth:pengguna', 'cekLevel:mhs']], function () {
        Route::get('/halaman-tiga', 'BerandaController@halamantiga')->name('halaman-tiga');
    });
=======
Route::group(['middleware' => ['auth:user,pengguna', 'CekLevel:admin,user']], function () {

    Route::get('/beranda', [BerandaController::class,'index']);
    Route::get('/halaman-satu', [BerandaController::class,'halamansatu'])->name('halaman-satu');
    Route::get('/halaman-dua', [BerandaController::class,'halamandua'])->name('halaman-dua');
});
>>>>>>> 70b11ef35ee4e24c2fbf0b286a21521bc8907952
