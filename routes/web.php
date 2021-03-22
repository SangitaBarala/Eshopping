<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
Route::get('/cart',[App\Http\Controllers\orderController::class,'cart']);
Route::get('/admin',[App\Http\Controllers\productController::class,'addProduct']);
Route::get('mainPage',[App\Http\Controllers\mainPageController::class,'dispalyCard']);
Route::get('/create/newProduct',[App\Http\Controllers\productController::class,'imgupload']);
Route::get('/search',[App\Http\Controllers\categoriesController::class,'search']);
Route::get('/admin',[App\Http\Controllers\categoriesController::class,'details']);



