<?php

use App\Http\Controllers\Acara;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\useracaraController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\securityController;
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
Route::get('login',[AuthController::class,'index'])->name('login') ;
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('registrasi/tamu-unit',[TamuController::class,'tamu_unit'])->name('tamu_unit') ;
Route::get('registrasi/tamu-acara',[TamuController::class,'tamu_acara'])->name('tamu_acara') ;
Route::post('registrasi/tamu-unit/create',[TamuController::class,'create_tamu_unit'])->name('create_tamu_unit') ;
Route::post('registrasi/tamu-acara/create',[TamuController::class,'create_tamu_acara'])->name('create_tamu_acara') ;

Route::get('qr',[TamuController::class, 'qr_view'])->name('qr_view');
Route::get('qr_code',[TamuController::class, 'generate'])->name('generate');


Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:superadmin']], function(){
        Route::get('dashboard',[SuperadminController::class,'index'])->name('superadmin');
    });
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin');
    });
    Route::group(['middleware' => ['cek_login:useracara']], function(){
        Route::get('dashboard',[useracaraController::class,'index'])->name('useracara');
    });
    Route::group(['middleware' => ['cek_login:security']], function(){
        Route::get('dashboard',[securityController::class,'dashboard'])->name('security');
        Route::get('security/datatamuunit', [securityController::class,'datatamuunit'])->name('datatamuunit');
        Route::get('security/datatamuacara', [securityController::class,'datatamuacara'])->name('datatamuacara');
        Route::get('security/scan',[securityController::class,'scan'])->name('scan');
        Route::post('security/validasiQrcode',[securityController::class,'validasiQrcode'])->name('validasiQrcode');
        Route::get('security/qrcode_view',[securityController::class,'qrcode_view'])->name('qrcode_view');
        Route::post('security/registrasi/tamu-unit',[TamuController::class,'regcekinTU'])->name('tamu_unit') ;
        Route::post('security/registrasi/tamu-acara',[TamuController::class,'regcekinTA'])->name('tamu_acara') ;
    });
});
Route::resource('acara', AcaraController::class);
