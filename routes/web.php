<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
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
    Route::post('/transaksi/{id}/prosesBuktiBayar', [TransaksiController::class, 'prosesBuktiBayar']);
    Route::post('/transaksi/{id}/prosesPengembalian', [TransaksiController::class, 'prosesPengembalian']);
    Route::resource('/mobil', MobilController::class);
    Route::resource('/user', UserController::class);
    
});

Route::middleware(['auth','member'])->prefix('member')->group(function () {
    Route::get('/profil', function () {
        return view('member.profil');
    });
    Route::post('/mobil/{mobil:slug}/sewa', [MemberController::class, 'sewa']);
    Route::post('/mobil/{mobil:slug}/prosesSewa', [MemberController::class, 'prosesSewa']);
});
