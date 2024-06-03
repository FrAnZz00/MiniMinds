<?php

use App\Http\Controllers\AngkaController;
use App\Http\Controllers\BentukController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HurufController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LogguruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReaddataController;
use App\Http\Controllers\RegguruController;
use App\Http\Controllers\RegsiswaController;
use App\Http\Controllers\LogsiswaController;
use App\Http\Controllers\MenggambarController;
use App\Http\Controllers\MewarnaiController;
use App\Http\Controllers\PilihanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WarnaController;
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

// Login 
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login'); 
    Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
    
    /* Registrasi */
    Route::get('/registrasi', [RegguruController::class, 'createguru'])->name('create'); 
    Route::post('/store', [RegguruController::class, 'storeguru'])->name('storeguru');
});

// Middleware

Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Tampilan Utama
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    
    // Pilihan Utama
    Route::get('/pilihan', [PilihanController::class, 'pilihan'])->name('pilihan');
    Route::get('/pilihan1', [PilihanController::class, 'pilihan1'])->name('pilihan1');
    Route::get('/pilihan2', [PilihanController::class, 'pilihan2'])->name('pilihan2');

    // Pilihan Level
    Route::get('/huruf', [LevelController::class, 'huruf'])->name('huruf');
    Route::get('/angka', [LevelController::class, 'angka'])->name('angka');
    Route::get('/warna', [LevelController::class, 'warna'])->name('warna');
    Route::get('/bentuk', [LevelController::class, 'bentuk'])->name('bentuk');
    Route::get('/mewarnai', [LevelController::class, 'mewarnai'])->name('mewarnai');
    Route::get('/menggambar', [LevelController::class, 'menggambar'])->name('menggambar');

    // Huruf
    Route::get('/rekamH1', [HurufController::class, 'rekamH1'])->name('rekamH1');
    Route::get('/rekamH2', [HurufController::class, 'rekamH2'])->name('rekamH2');
    Route::get('/rekamH3', [HurufController::class, 'rekamH3'])->name('rekamH3');
    Route::get('/huruf1', [HurufController::class, 'huruf1'])->name('huruf1');
    Route::get('/ohuruf1', [HurufController::class, 'ohuruf1'])->name('ohuruf1');
    Route::get('/selamat2', [HurufController::class, 'selamat2'])->name('selamat2');

    // Angka
    Route::get('/rekamA1', [AngkaController::class, 'rekamA1'])->name('rekamA1');
    Route::get('/rekamA2', [AngkaController::class, 'rekamA2'])->name('rekamA2');
    Route::get('/rekamA3', [AngkaController::class, 'rekamA3'])->name('rekamA3');

    // Warna
    Route::get('/rekamW1', [WarnaController::class, 'rekamW1'])->name('rekamW1');
    Route::get('/rekamW2', [WarnaController::class, 'rekamW2'])->name('rekamW2');
    Route::get('/rekamW3', [WarnaController::class, 'rekamW3'])->name('rekamW3');
    Route::get('/warna1', [WarnaController::class, 'warna1'])->name('warna1');
    Route::get('/warna2', [WarnaController::class, 'warna2'])->name('warna2');
    Route::get('/warna3', [WarnaController::class, 'warna3'])->name('warna3');
    Route::get('/owarna1', [WarnaController::class, 'owarna1'])->name('owarna1');
    Route::get('/owarna2', [WarnaController::class, 'owarna2'])->name('owarna2');
    Route::get('/owarna3', [WarnaController::class, 'owarna3'])->name('owarna3');
    Route::get('/selamat1', [WarnaController::class, 'selamat1'])->name('selamat1');

    // Bentuk
    Route::get('/rekamB1', [BentukController::class, 'rekamB1'])->name('rekamB1');
    Route::get('/rekamB2', [BentukController::class, 'rekamB2'])->name('rekamB2');
    Route::get('/rekamB3', [BentukController::class, 'rekamB3'])->name('rekamB3');
    Route::get('/bentuk1', [BentukController::class, 'bentuk1'])->name('bentuk1');
    Route::get('/bentuk2', [BentukController::class, 'bentuk2'])->name('bentuk2');
    Route::get('/bentuk3', [BentukController::class, 'bentuk3'])->name('bentuk3');
    Route::get('/obentuk1', [BentukController::class, 'obentuk1'])->name('obentuk1');
    Route::get('/obentuk2', [BentukController::class, 'obentuk2'])->name('obentuk2');
    Route::get('/obentuk3', [BentukController::class, 'obentuk3'])->name('obentuk3');

    // Mewarnai
    Route::get('/mewarnai', [MewarnaiController::class, 'mewarnai'])->name('mewarnai');

    // Menggambar
    Route::get('/menggambar', [MenggambarController::class, 'menggambar'])->name('menggambar');
    Route::get('/selamat3', [MenggambarController::class, 'selamat3'])->name('selamat3');

    // Data Siswa
    Route::middleware('checkGuru')->group(function () {
        Route::get('/dataSiswa', [DataController::class, 'index'])->name('dataSiswa'); 
        Route::post('/data-proses', [DataController::class, 'data_proses'])->name('data-proses');
        
        Route::get('/readData', [ReaddataController::class, 'index'])->name('readData');
    });
});
