<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ADMIN
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('/admin/mobil', MobilController::class);
Route::resource('/admin/user', UserController::class);
