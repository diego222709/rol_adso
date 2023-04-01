<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->middleware('can:home')->name('home');

Route::get('/administrador', [App\Http\Controllers\HomeController::class, 'administrador'])->middleware('can:administrador')->name('administrador');
Route::get('/invitado', [App\Http\Controllers\HomeController::class, 'invitado'])->middleware('can:invitado')->name('invitado');
