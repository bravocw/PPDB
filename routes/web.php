<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AuthController;

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

//halaman awal
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/completesiswa', [PpdbController::class, 'complete'])->name('siswa.complete');
Route::post('/lengkap', [PpdbController::class, 'lengkap'])->name('lengkap');


Route::middleware('isGuest')->group(function () {

    // register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store', [AuthController::class, 'store'])->name('store');

    //login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

    // print pdf
    Route::get('/print', [PpdbController::class, 'print'])->name('print');
});

// logout
Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');

//halaman setelah login admin

Route::middleware('isLogin', 'CekRole:admin')->group(function () {
    Route::get('/print', [PpdbController::class, 'print'])->name('print');
    Route::get('admin/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/users', [PpdbController::class, 'users'])->name('dashboard.users');
});

//halaman setelah login user
Route::middleware('isLogin', 'CekRole:user')->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/print', [PpdbController::class, 'print'])->name('print');
    Route::get('siswa/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
});

// halaman setelah login admin dan user
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function () {
    Route::get('/print', [PpdbController::class, 'print'])->name('print');
    Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/setting', [PpdbController::class, 'setting'])->name('dashboard.setting');
    Route::get('/dashboard/setting/upload', [PpdbController::class, 'settingUpload'])->name('dashboard.setting.upload');
    Route::patch('/dashboard/setting/change', [PpdbController::class, 'changesetting'])->name('dashboard.setting.change');
    Route::get('/dashboard/setting/uploaddok', [PpdbController::class, 'settingUploaddok'])->name('dashboard.setting.uploaddok');
    Route::patch('/dashboard/setting/changedok', [PpdbController::class, 'changedoksetting'])->name('dashboard.setting.changedok');
    Route::get('/cekstatus', [PpdbController::class, 'showForm'])->name('showForm');
    Route::post('/cekstatus', [PpdbController::class, 'cekstatus'])->name('cekstatus');
    Route::get('/dashboard/infoedit/{id}', [PpdbController::class, 'infoedit'])->name('informasi.edit');
    Route::put('/dashboard/infoupdate/{id}', [PpdbController::class, 'infoupdate'])->name('informasi.update');
    Route::get('/dashboard/siswa', [PpdbController::class, 'siswa'])->name('siswa');
    Route::get('/dashboard/siswa/edit/{id}', [PpdbController::class, 'siswaedit'])->name('siswa.edit');
    Route::put('/dashboard/siswa/update/{id}', [PpdbController::class, 'siswaupdate'])->name('siswa.update');
});
