<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/', '/login');
Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Auth::routes();

Route::get('/bukus', [App\Http\Controllers\BukuController::class,'index'])->middleware('auth');
Route::resource('bukus',App\Http\Controllers\BukuController::class)->middleware('auth');

Route::get('/anggotas',[App\Http\Controllers\AnggotaController::class,'index'] )->middleware('auth') ;
Route::resource('anggotas',App\Http\Controllers\AnggotaController::class)->middleware('auth') ;

Route::get('/users',[App\Http\Controllers\UserController::class,'index'] )->middleware('auth') ;
Route::resource('users',App\Http\Controllers\UserController::class)->middleware('auth') ;

Route::get('/pinjams',[App\Http\Controllers\PinjamController::class,'index'] )->middleware('auth') ;
Route::resource('pinjams',App\Http\Controllers\PinjamController::class)->middleware('auth') ;
