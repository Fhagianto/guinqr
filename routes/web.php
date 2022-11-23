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
        Route::get('superadmin/dashboard',[SuperadminController::class,'dashboard'])->name('superadmin_dashboard');
    });
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard');
    });
    Route::group(['middleware' => ['cek_login:useracara']], function(){
        Route::get('useracara/dashboard',[useracaraController::class,'dashboard'])->name('useracara_dashboard');
        Route::post('security/tamu-acara/view_buku_tamu',[securityController::class,'view_buku_tamu'])->name('view_buku_tamu');
    });
    Route::group(['middleware' => ['cek_login:security']], function(){
        Route::get('security/dashboard',[securityController::class,'dashboard'])->name('security_dashboard');
        Route::get('security/datatamuunit', [securityController::class,'datatamuunit'])->name('datatamuunit');
        Route::get('security/datatamuacara', [securityController::class,'datatamuacara'])->name('datatamuacara');
        Route::get('security/scan',[securityController::class,'scan'])->name('scan');
        Route::post('security/validasiQrcode',[securityController::class,'validasiQrcode'])->name('validasiQrcode');
        Route::get('security/qrcode_view',[securityController::class,'qrcode_view'])->name('qrcode_view');
        Route::post('security/registrasi/tamu-unit',[TamuController::class,'regcekinTU'])->name('tamu_unit');
        Route::post('security/registrasi/tamu-acara',[TamuController::class,'regcekinTA'])->name('tamu_acara');
        Route::post('security/tamu-unit/cek-out',[securityController::class,'COunit'])->name('COunit');
        Route::post('security/tamu-acara/cek-out',[securityController::class,'COacara'])->name('COacara');
        Route::post('security/tamu-unit/no_badge',[securityController::class,'e_nobadge_tu'])->name('edit_nobadge_tamuunit');
        Route::post('security/tamu-acara/no_badge',[securityController::class,'e_nobadge_ta'])->name('edit_nobadge_tamuacara');

    });
});
Route::resource('acara', AcaraController::class);
