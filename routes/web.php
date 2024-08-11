<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KecamatanController;

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
    return view ('home', [
        "title" => "Home"
    ]) ;
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang"
    ]);
});

Route::get('/tabelwisata', function () {
    return view ('tabelwisata', [
        "title" => "tabelwisata"
    ]);
});
Route::get('/Lokasi', function () {
    return view ('lokasi', [
        "title" => "Lokasi"
    ]);
});

Route::get('/deskripsi', function () {
    return view ('info', [
        "title" => "Deskripsi"
    ]);
});

Route::get('/deskripsi2', function () {
    return view ('info2', [
        "title" => "Deskripsi"
    ]);
});

Route::get('/detail', function () {
    return view ('detail', [
        "title" => "Deskripsi"
    ]);
});


Route::get('/admin',[PemesanController::class, 'index'])->name('admin');
Route::get('/pemesan',[PemesanController::class, 'pemesan'])->name('pemesan');


// Route::get('/formpemesanan',[PemesanController::class, 'formpemesanan'])->name('formpemesanan');
// Route::post('/tambahdata',[PemesanController::class, 'tambahdata'])->name('tambahdata');
// Route::post('/pemesan',[PemesanController::class, 'pemesan'])->name('pemesan');

Route::get('/tampilkandata/{id}',[PemesanController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}',[PemesanController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[PemesanController::class, 'delete'])->name('delete');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/search', [PemesanController::class, 'search'])->name('search');


//wisata

Route::get('/wisata', [WisataController::class, 'indexcl'])->name('wisata');
Route::get('/tabelwisata', [WisataController::class, 'indexzl'])->name('tabelwisata');
Route::get('/detailwisata/{id}', [WisataController::class, 'detail'])->name('detailwisata');
Route::get('/tambahwisata', [WisataController::class, 'tambahWisata'])->name('tambahwisata');
Route::post('/simpanwisata', [WisataController::class, 'simpanWisata'])->name('simpanwisata');
Route::get('/deletewisata/{id}', [WisataController::class, 'delete'])->name('deletewisata');
Route::get('/tampilwisata/{id}', [WisataController::class, 'tampilkanwisata'])->name('tampilwisata');
Route::post('/updatewisata/{id}', [WisataController::class, 'updatewisata'])->name('updatewisata');

Route::get('/storage/images/{filename}', function ($filename) {
    $filePath = storage_path('app/public/images/' . $filename);
    if (file_exists($filePath)) {
        return response()->file($filePath);
    }
    abort(404);
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/formpemesanan', [PemesanController::class, 'formpemesanan'])->name('formpemesanan');
    Route::post('/tambahdata', [PemesanController::class, 'tambahdata'])->name('tambahdata');
});


Route::get('/kecamatan', [KecamatanController::class, 'indexc'])->name('kecamatan');
Route::get('/tabelkecamatan', [KecamatanController::class, 'indexz'])->name('tabelkecamatan');
Route::get('/detailkecamatan/{id}', [KecamatanController::class, 'detail'])->name('detailkecamatan');
Route::get('/tambahkecamatan', [KecamatanController::class, 'tambahKecamatan'])->name('tambahkecamatan');
Route::post('/simpankecamatan', [KecamatanController::class, 'simpanKecamatan'])->name('simpankecamatan');
Route::get('/deletekecamatan/{id}', [KecamatanController::class, 'delete'])->name('deletekecamatan');
Route::get('/tampilkecamatan/{id}', [KecamatanController::class, 'tampilkankecamatan'])->name('tampilkecamatan');
Route::post('/updatekecamatan/{id}', [KecamatanController::class, 'updatekecamatan'])->name('updatekecamatan');
