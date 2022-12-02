<?php

use App\Http\Controllers\Admin\DashboarController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/afkah', function () {
    return view('welcome');
});

Route::get('/afkah2', function () {
    return view('Afkah');
});


Route::get('/login', function () {
    return view('Auth.Login');
})->name('login')->middleware('guest');

Route::prefix('auth')->controller(LoginController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.loginproccess');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboarController::class, 'index']);


    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/createpegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

    Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

    Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

    Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
});
