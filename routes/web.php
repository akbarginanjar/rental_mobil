<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenyewaController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang-kami', function () {
    return view('member.tentang-kami');
});

Route::get('/mobil', [MemberController::class, 'mobil']);
Route::get('/mobil/{mobil:slug}', [MemberController::class, 'mobilDetail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::resource('/transaksi', TransaksiController::class);
    Route::resource('/penyewa', PenyewaController::class);
    Route::post('/transaksi/{id}/prosesBuktiBayar', [TransaksiController::class, 'prosesBuktiBayar']);
    Route::post('/transaksi/{id}/prosesPengembalian', [TransaksiController::class, 'prosesPengembalian']);
    Route::post('/transaksi/{id}/prosesTolak', [TransaksiController::class, 'prosesTolak']);
    Route::resource('/mobil', MobilController::class);
    Route::resource('/user', UserController::class);
    
});

Route::middleware(['auth','member'])->prefix('member')->group(function () {
    Route::get('/profil', [MemberController::class, 'profil']);
    Route::post('/profil/simpanPenyewa', [MemberController::class, 'simpanPenyewa']);
    Route::post('/mobil/{mobil:slug}/sewa', [MemberController::class, 'sewa']);
    Route::post('/mobil/{mobil:slug}/prosesSewa', [MemberController::class, 'prosesSewa']);
});