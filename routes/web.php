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
use App\Http\Controllers\UserunitController;

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
Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline',["title"=>"E-GUIN QR | Offline"]);
});


Route::get('login',[AuthController::class,'index'])->name('login') ;
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::put('ganti_pass',[AuthController::class,'ganti_pass'])->name('ganti_pass');

Route::get('registrasi/tamu-unit',[TamuController::class,'tamu_unit'])->name('tamu_unit') ;
Route::get('registrasi/tamu-acara',[TamuController::class,'tamu_acara'])->name('tamu_acara') ;
Route::post('registrasi/tamu-unit/create',[TamuController::class,'create_tamu_unit'])->name('create_tamu_unit') ;
Route::post('registrasi/tamu-acara/create',[TamuController::class,'create_tamu_acara'])->name('create_tamu_acara') ;
Route::get('qr',[TamuController::class, 'qr_view'])->name('qr_view');
Route::get('qr_code',[TamuController::class, 'generate'])->name('generate');


Route::group(['middleware' => ['auth:user,unit']], function(){
    Route::group(['middleware' => ['cek_login:superadmin']], function(){
        Route::get('superadmin/dashboard1',[SuperadminController::class,'index'])->name('superadmin/dashboard1');

        Route::get('superadmin/usermanage',[SuperadminController::class,'usermanage'])->name('usermanage');
        Route::post('superadmin/usermanage-add',[SuperadminController::class,'storeUser'])->name('usermanage-add');
        Route::get('userm-edit/{id}',[SuperadminController::class,'editUser'])->name('userm-edit');
        Route::put('superadmin/usermanage-update',[SuperadminController::class,'updateUser'])->name('usermanage-update');
        Route::delete('superadmin/usermanage-delete',[SuperadminController::class,'deleteUser'])->name('usermanage-delete');

        Route::get('superadmin/acaramanage',[SuperadminController::class,'acaramanage'])->name('acaramanage');
        Route::post('superadmin/acaramanage-add',[SuperadminController::class,'storeAcara'])->name('acaramanage-add');
        Route::get('acaram-catch/{id}',[SuperadminController::class,'acaramcatch'])->name('acaram-catch');
        Route::put('superadmin/acaramanage-update',[SuperadminController::class,'updateAcara'])->name('acaramanage-update');
        Route::delete('superadmin/acaram-delete',[SuperadminController::class,'deleteAcaram'])->name('acaram-delete');

        Route::get('superadmin/unitmanage',[SuperadminController::class,'unitmanage'])->name('unitmanage');
        Route::post('superadmin/unitmanage-add',[SuperadminController::class,'storeUnit'])->name('unitmanage-add');
        Route::get('unitm-catch/{id}',[SuperadminController::class,'unitmcatch'])->name('unitm-catch');
        Route::put('superadmin/unitmanage-update',[SuperadminController::class,'updateUnit'])->name('unitmanage-update');
        Route::delete('superadmin/unitmanage-delete',[SuperadminController::class,'deleteUnit'])->name('unitmanage-delete');
    });
    Route::group(['middleware' => ['cek_login:userunit']], function(){
        Route::get('userunit/dashboard2',[UserunitController::class,'dashboard'])->name('userunit/dashboard2');

        Route::get('userunit/tamuacara-list',[UserunitController::class,'tamuacaraList'])->name('tamuacara-list');
        Route::get('tamuacara-catch/{id}',[UserunitController::class,'tamuacaraListcatch'])->name('tamuacara-catch');

        Route::get('userunit/tamuunit-list',[UserunitController::class,'tamuunitList'])->name('tamuunit-list');
        Route::put('userunit/tamuunit-list-update',[UserunitController::class,'tamuunitListUpdate'])->name('tamuunit-list-update');
        Route::get('tamuunitl-catch/{id}',[UserunitController::class,'tamuunitListcatch'])->name('tamuunitl-catch');
    });
    Route::group(['middleware' => ['cek_login:useracara']], function(){
        Route::get('useracara/dashboard',[useracaraController::class,'dashboard'])->name('useracara_dashboard');
        // Route::post('useracara/tamu_view',[AcaraController::class,'tamu_view'])->name('tamu_view');
        Route::resource('acara', AcaraController::class);
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

