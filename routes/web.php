<?php

use App\Http\Controllers\adminAuth;
use App\Http\Controllers\adminDashboard;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [adminAuth::class, 'index'])->name('admin.login');
    Route::post('/_login', [adminAuth::class, 'login'])->name('admin._login');
    Route::get('/register', [adminAuth::class, 'register'])->name('admin.register');
    Route::get('/logout', [adminAuth::class, 'logout'])->name('admin.logout');
    Route::post('/_register', [adminAuth::class, '_register'])->name('admin._register');
    Route::get('/dashboard', [adminDashboard::class, 'index'])->name('admin.dashboard')->middleware('auth.admin');
    Route::get('/tambah-kelas', [adminDashboard::class, 'tambahKelasView'])->name('admin.tambah.kelas.view');
});
