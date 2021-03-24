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

// ADMIN ROUTES

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::post('/admin/product', [App\Http\Controllers\AdminController::class, 'addProduct']);
Route::get('delete/{id}', [App\Http\Controllers\AdminController::class, 'productDelete'])->name('delete');


// END ADMIN ROUTES

// PRODUCT ROUTES
Route::get('/product',[App\Http\Controllers\productController::class, 'allProducts']);
Route::get("detail/{id}",[ProductController::class,'detail']);
// END PRODUCT ROUTES

// CART ROUTES
Route::get('/cart',[App\Http\Controllers\productController::class,'cart'])->name('cart');
Route::get('/add_to_cart/{products}',[App\Http\Controllers\productController::class,'addToCart']);

// END CART ROUTES

Route::post('/master',[App\Http\Controllers\myController::class,'createUser']);
Route::get('/list',[App\Http\Controllers\myController::class,'listUsers']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('mainPage',[App\Http\Controllers\mainPageController::class,'dispalyCard']);
Route::get('/search',[App\Http\Controllers\categoriesController::class,'search']);



