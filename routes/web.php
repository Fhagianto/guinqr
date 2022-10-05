<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Route::get('/tamu-acara', function () {
    return view('admin.tamu-acara');
});
Route::get('/tamu-unit', function () {
    return view('admin.tamu-unit');
});
Route::get('/manage-user', function () {
    return view('supadmin.manage-user');
});
Route::get('/list-tamu-acara', function () {
    return view('useracara.list-tamu-acara');
});


/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

require __DIR__.'/auth.php';
