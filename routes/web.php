<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// 1. Halaman utama: array data dikirim dari route ke view
Route::get('/', function () {
    return view('home', [
        'judul' => 'Selamat datang di Laravel',
        'fitur' => [
            ['nama' => 'Routing', 'deskripsi' => 'Mengatur alamat URL dan halaman apa yang ditampilkan.'],
            ['nama' => 'Blade', 'deskripsi' => 'Template engine untuk menulis tampilan dengan sintaks yang rapi.'],
            ['nama' => 'Eloquent ORM', 'deskripsi' => 'Mengelola data database lewat Model, tanpa menulis SQL manual.'],
            ['nama' => 'Artisan', 'deskripsi' => 'Perintah CLI untuk membuat controller, model, dan migrasi.'],
        ],
    ]);
})->name('home');

// 2. Halaman about: array data dikirim dari route ke view
Route::get('/about', function () {
    return view('about', [
        'profil' => [
            'Nama'          => 'Muhammad Alif Habibie',
            'Kampus'        => 'Universitas Negeri Medan',
            'Program Studi' => 'Ilmu Komputer',
            'Mata Kuliah'   => 'Pemrograman Web',
        ],
        'tools' => ['PHP', 'Composer', 'Laravel', 'MySQL', 'phpMyAdmin', 'VS Code'],
    ]);
})->name('about');

// 3. Halaman contact: ditangani Controller + Model (pola MVC)
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Bonus: route dengan parameter, contoh: /hello/Alif
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => $nama]);
})->where('nama', '[A-Za-z ]+')->name('hello');