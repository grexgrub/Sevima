<?php

use App\Http\Controllers\adminAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\siswaAuth;
use App\Http\Controllers\siswaController;
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
    return view('siswa.login', [
        'title' => 'siswa-login'
    ]);
})->name('login.default');

Route::prefix('admin')->group(function () {
    Route::get('/', [adminAuth::class, 'index'])->name('admin.login');
    Route::get('/login', [adminAuth::class, 'index'])->name('admin.login');
    Route::post('/_login', [adminAuth::class, 'login'])->name('admin._login');
    Route::get('/register', [adminAuth::class, 'register'])->name('admin.register');
    Route::get('/logout', [adminAuth::class, 'logout'])->name('admin.logout');
    Route::post('/_register', [adminAuth::class, '_register'])->name('admin._register');
    Route::post('/jadwalKelasModal', [adminDashboard::class, 'jadwalKelasModal'])->name('admin.jadwalKelasModal');
    Route::get('/dashboard', [adminDashboard::class, 'index'])->name('admin.dashboard')->middleware('auth.admin');
    Route::get('/tambah-siswa', [adminDashboard::class, 'tambahSiswaView'])->name('admin.tambah.siswa.view')->middleware('auth.admin');
    Route::post('/tambah-siswa', [adminDashboard::class, 'tambahSiswa'])->name('admin.tambah.siswa')->middleware('auth.admin');
    Route::get('/Siswa', [adminDashboard::class, 'siswa'])->name('admin.siswa')->middleware('auth.admin');
    Route::get('/tambah-kelas', [adminDashboard::class, 'tambahKelasView'])->name('admin.tambah.kelas.view')->middleware('auth.admin');
    Route::post('/tambah-kelas', [adminDashboard::class, 'tambahKelas'])->name('admin.tambah.kelas')->middleware('auth.admin');
    Route::get('/edit/{namaKelas}', [adminDashboard::class, 'editKelas'])->name('admin.edit.kelas')->middleware('auth.admin');
    Route::post('/search', [adminDashboard::class, 'search'])->middleware('auth.admin');
    Route::post('/search-siswa', [adminDashboard::class, 'searchSiswa'])->middleware('auth.admin');
    Route::get('/delete/{namaKelas}', [adminDashboard::class, 'deleteKelas'])->name('admin.delete.kelas')->middleware('auth.admin');
    Route::get('/detailSiswa/{noSiswa}', [adminDashboard::class, 'detailSiswa'])->name('admin.detail.siswa')->middleware('auth.admin');
});

Route::prefix('siswa')->group(function () {
    Route::get('/', [siswaAuth::class, 'index'])->name('siswa.login.view');
    Route::get('/register', [siswaAuth::class, 'register'])->name('siswa.register');
    Route::post('/register', [siswaAuth::class, '_register'])->name('siswa._register');
    Route::get('/login', [siswaAuth::class, 'index'])->name('siswa.login.view');
    Route::post('/login', [siswaAuth::class, 'login'])->name('siswa.login');
    Route::get('/dashboard', [siswaController::class, 'index'])->name('siswa.dashboard');
    Route::get('/catatan', [siswaController::class, 'catatan'])->name('siswa.catatan');
    Route::get('/logout', [siswaAuth::class, 'logout'])->name('siswa.logout');
    Route::get('/buatcatatan', [siswaController::class, 'buatcatatan'])->name('siswa.buatcatatan');
    Route::post('/savecatatan', [siswaController::class, 'savecatatan'])->name('siswa.savecatatan');
});
