<?php

use App\Http\Controllers\Acara;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\useracaraController;
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
    return view('welcome',["title"=>"E-GUIN QR | Welcome"]);
});

// Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// return ["title"=>"E-GUIN QR | Login"];
Route::get('login',[AuthController::class,'index'])->name('login') ;
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:superadmin']], function(){
        Route::get('superadmin','App\Http\Controllers\SuperadminController@index')->name('superadmin');
    });
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });
    Route::group(['middleware' => ['cek_login:useracara']], function(){
        Route::get('useracara','App\Http\Controllers\useracaraController@index')->name('useracara');
    });
});
Route::resource('acara', AcaraController::class);
