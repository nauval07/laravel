<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\BeritaLulusanDosenController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class,'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth','checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class,'adminHome'])->name('admin.home');
    // Route::get('/ksi/dosen', [LoginRegisterController::class,'dosen'])->name('ksi.dosen');
    // Route::get('/ksi/lulusan', [LoginRegisterController::class,'lulusan'])->name('ksi.lulusan');
    Route::get('/berita/form', [BeritaController::class,'showBeritaForm'])->name('berita.form');
});

Route::group(['middleware' => ['auth','checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class,'userHome'])->name('user.home');
    Route::get('/ksi/berita', [LoginRegisterController::class,'berita'])->name('ksi.berita');
    Route::get('/ksi/dosen', [LoginRegisterController::class,'dosen'])->name('ksi.dosen');
    Route::get('/ksi/lulusan', [LoginRegisterController::class,'lulusan'])->name('ksi.lulusan');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
