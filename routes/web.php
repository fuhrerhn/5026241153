<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');

});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('meet1', function () {
    return view('meet1-intro');
})->name('meet1'); // <--- Tambahan name tag di sini

Route::get('meet2', function () {
    return view('meet2-news');
})->name('meet2');

Route::get('meet3', function () {
    return view('meet3-responsive');
})->name('meet3');

Route::get('meet3-tugas', function () {
    return view('meet3-tugas-contoh');
})->name('meet3-tugas');

Route::get('meet4-tugas', function () {
    return view('meet4-tugas-5026241153');
})->name('meet4-tugas');

Route::get('meet5', function () {
    return view('meet5-dell');
})->name('meet5');

Route::get('meet5-tugas', function () {
    return view('meet5-tugas-linktree');
})->name('meet5-tugas');

Route::get('menu', function () {
	return view('menu');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Tabel Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
