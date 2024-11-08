<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', App\Livewire\Auth\Login::class)->name('login');
Route::get('/logout', App\Livewire\Auth\Logout::class)->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', App\Livewire\Home::class)->name('home');

    Route::get('/pemerintahan-kesra', App\Livewire\PemerintahanKesra\Index::class)->name('pemerintahan-kesra');

    Route::get('/perekonomian-pembangunan', App\Livewire\PerekonomianPembangunan\Index::class)->name('perekonomian-pembangunan');
    Route::get('/perekonomian-pembangunan/{code}', App\Livewire\PerekonomianPembangunan\Detail::class)->name('perekonomian-pembangunan.detail');
    // Route::get('/administrasi-umum', App\Livewire\AdministrasiUmum\Index::class)->name('administrasi-umum');

    //
    Route::get('/administrasi-umum/semesta', App\Livewire\AdministrasiUmum\Index::class)->name('administrasi-umum.semesta');
    Route::get('/administrasi-umum/sidesi', App\Livewire\AdministrasiUmum\Sidesi::class)->name('administrasi-umum.sidesi');
    Route::get('/administrasi-umum/guruku', App\Livewire\AdministrasiUmum\Guruku::class)->name('administrasi-umum.guruku');
    Route::get('/administrasi-umum/sinona', App\Livewire\AdministrasiUmum\Sinona::class)->name('administrasi-umum.sinona');
});
