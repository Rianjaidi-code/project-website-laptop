<?php

use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\ImportDataController;
use App\Http\Controllers\LaptopDataController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('users.index');
    } else {
        return view('pages.auth.auth-login');
    }
});

Route::middleware(['auth'])->group(function () {
    // Route::get('home', function () {
    //     return view('pages.users.index', ['type_menu' => 'home']);
    // })->name('home');

    Route::resource('users', UserController::class);
    Route::resource('data-laptop', LaptopDataController::class);
    Route::resource('import-proses', ImportDataController::class);
    Route::resource('barang-masuk', BarangMasukController::class);
    Route::resource('barang-keluar', BarangKeluarController::class);
});
