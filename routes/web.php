<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/prosesregister',[AuthController::class,'prosesregister'])->name('prosesregister');
    Route::post('/proseslogin',[AuthController::class,'proseslogin'])->name('proseslogin');
});
Route::get('/home',function () {
    return redirect('/dashboard/admin');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard/pengurus', [PengurusController::class, 'dashboardpengurus'])->name('dashboard/pengurus')->middleware('userAkses:2');
    Route::get('/datakegiatan/pengurus', [PengurusController::class, 'datakegiatanpengurus'])->name('datakegiatan/pengurus')->middleware('userAkses:2');
    Route::get('/databerita/pengurus', [PengurusController::class, 'databeritapengurus'])->name('databerita/pengurus')->middleware('userAkses:2');
    Route::get('/dashboard/admin', [AdminController::class, 'dashboardadmin'])->name('dashboard/admin')->middleware('userAkses:1');
    Route::get('/datakegiatan/admin', [AdminController::class, 'datakegiatanadmin'])->name('datakegiatan/admin')->middleware('userAkses:1');
    Route::get('/databerita/admin', [AdminController::class, 'databeritaadmin'])->name('databerita/admin')->middleware('userAkses:1');
});



