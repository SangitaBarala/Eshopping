<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('mainPage', function () {
    return view('mainPage');
});

Auth::routes();

Route::post('/master',[App\Http\Controllers\myController::class,'createUser']);
Route::get('/list',[App\Http\Controllers\myController::class,'listUsers']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
