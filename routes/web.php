<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;






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
Route::get('/', function () {
    return view('welcome');
});

// For CRUD table cast
// Route::resource('/presensi', PresensiController::class);
// Route::get('/user/{id}/presensi')

Route::resource('/presensi', PresensiController::class)->middleware('auth');


Route::get('/siswa/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/siswa', [UserController::class, 'index'])->name('user.index');

Route::controller(AuthController::class)->group(function() {
    // register form
    Route::get('/register', 'register')->name('auth.register');
    // store register
    Route::post('/register', 'store')->name('auth.store');
    // login form
    Route::get('/login', 'login')->name('auth.login');
    // auth proses
    Route::post('/auth', 'auth')->name('auth.authentication');
    // logout
    Route::post('/logout', 'logout')->name('auth.logout');
    // dashboard page
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
});

Route::get('/siswa/{id}/pdf', [ExportController::class, 'PDF'])->name('PDF');