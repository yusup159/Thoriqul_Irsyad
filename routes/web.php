<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KegiatanController;
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
    Route::get('/',[Controller::class,'index'])->name('index');
    Route::get('/kegiatan',[Controller::class,'kegiatan'])->name('kegiatan');
    Route::get('/berita',[Controller::class,'berita'])->name('berita');
    Route::get('/profil',[Controller::class,'profil'])->name('profil');
    Route::get('/detailberita/',[Controller::class,'detailberita'])->name('detailberita');
    Route::get('/detailkegiatan/',[Controller::class,'detailkegiatan'])->name('detailkegiatan');

    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/prosesregister',[AuthController::class,'prosesregister'])->name('prosesregister');
    Route::post('/proseslogin',[AuthController::class,'proseslogin'])->name('proseslogin');
});
Route::get('/home',function () {
    return redirect('/index');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard/pengurus', [PengurusController::class, 'dashboardpengurus'])->name('dashboard/pengurus')->middleware('userAkses:2');

    
    
    
    Route::get('/profil/admin', [AdminController::class, 'profiladmin'])->name('profil/admin')->middleware('userAkses:1,2');
    Route::post('/updateprofil/admin/{id}', [AdminController::class, 'proseseditprofiladmin'])->name('updateprofil/admin')->middleware('userAkses:1,2');
    Route::get('/datauser/admin', [AdminController::class, 'datauser'])->name('datauser/admin')->middleware('userAkses:1');
    Route::get('/deleteusera/admin/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser/admin')->middleware('userAkses:1');
   
   
    Route::get('/dashboard/admin', [AdminController::class, 'dashboardadmin'])->name('dashboard/admin')->middleware('userAkses:1');
    Route::get('/datakegiatan/admin', [AdminController::class, 'datakegiatanadmin'])->name('datakegiatan/admin')->middleware('userAkses:1,2');
    Route::get('/databerita/admin', [AdminController::class, 'databeritaadmin'])->name('databerita/admin')->middleware('userAkses:1,2');
    Route::get('/tambahberita/admin', [BeritaController::class, 'tambahberitaadmin'])->name('tambahberita/admin')->middleware('userAkses:1,2');
    Route::post('/prosestambahberita/admin', [BeritaController::class, 'prosestambahberitaadmin'])->name('prosestambahberita/admin')->middleware('userAkses:1,2');
    Route::get('/showberita/admin/{id}', [BeritaController::class, 'showberitaadmin'])->name('showberita/admin')->middleware('userAkses:1,2');
    Route::get('/editberita/admin/{id}', [BeritaController::class, 'editberitaadmin'])->name('editberita/admin')->middleware('userAkses:1,2');
    Route::post('/proseseditberita/admin/{id}', [BeritaController::class, 'proseseditberitaadmin'])->name('proseseditberita/admin')->middleware('userAkses:1,2');
    Route::get('/deleteberita/admin/{id}', [BeritaController::class, 'deleteberitaadmin'])->name('deleteberita/admin')->middleware('userAkses:1,2');

    Route::get('/tambahkegiatan/admin', [KegiatanController::class, 'tambahkegiatanadmin'])->name('tambahkegiatan/admin')->middleware('userAkses:1,2');
    Route::post('/prosestambahkegiatan/admin', [KegiatanController::class, 'prosestambahkegiatanadmin'])->name('prosestambahkegiatan/admin')->middleware('userAkses:1,2');
    Route::get('/showkegiatan/admin/{id}', [KegiatanController::class, 'showkegiatanadmin'])->name('showkegiatan/admin')->middleware('userAkses:1,2');
    Route::get('/editkegiatan/admin/{id}', [KegiatanController::class, 'editkegiatanadmin'])->name('editkegiatan/admin')->middleware('userAkses:1,2');
    Route::post('/proseseditkegiatan/admin/{id}', [KegiatanController::class, 'proseseditkegiatanadmin'])->name('proseseditkegiatan/admin')->middleware('userAkses:1,2');
    Route::get('/deletekegiatan/admin/{id}', [KegiatanController::class, 'deletekegiatanadmin'])->name('deletekegiatan/admin')->middleware('userAkses:1,2');

});



