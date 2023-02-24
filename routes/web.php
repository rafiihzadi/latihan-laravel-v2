<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;

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

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('logout','LoginController@lagout')->name('logout');

Route::group(['middleware' => ['auth:user','ceklevel:admin']], function (){
    route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
});


Route::group(['middleware' => ['auth:user,pengunna','ceklevel:admin,user,mhs']], function (){
    route::get('/beranda', 'BerandaController@index');
    route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
});

Route::group(['middleware' => ['auth:pengguna','ceklevel:mhs']], function (){
    route::get('/halaman-tiga','BerandaController@halamantiga')->name('halaman-tiga');

    
});