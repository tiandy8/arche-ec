<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('events', [HomeController::class, 'events'])->name('events');
Route::get('offline', [HomeController::class, 'offlineStore'])->name('offline.store');
Route::get('store', [HomeController::class, 'store'])->name('store');
Route::get('service', [HomeController::class, 'service'])->name('service');


Route::middleware('guest')->group(function () {


    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::get('login', [UserController::class, 'login'])->name('login');

    Route::post('login_store', [UserController::class, 'loginStore'])->name('login.store');
    Route::post('register_store', [UserController::class, 'registerStore'])->name('register.store');


});

Route::middleware('auth')->group(function() {

    Route::get('user/{id}', [UserController::class, 'userDetail'])->name('user.detail');
    Route::get('user/edit/{id}', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('user/update/{id}', [UserController::class, 'updateUser'])->name('user.update');




    Route::get('logout', [UserController::class, 'logout'])->name('logout');

});

Route::middleware('admin')->group(function(){

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('products', [AdminController::class, 'products'])->name('products');
    Route::get('product/create', [AdminController::class, 'productCreate'])->name('product.create');
    Route::post('product/store', [AdminController::class, 'productStore'])->name('product.store');
    Route::get('product/edit/{id}', [AdminController::class, 'productEdit'])->name('product.edit');
    Route::post('product/update/{id}', [AdminController::class, 'productUpdate'])->name('product.update');
    Route::get('product/destroy/{id}', [AdminController::class, 'productDestroy'])->name('product.destroy');
    Route::post('product/update-img/{id}', [AdminController::class, 'updateImage'])->name('update.image');


});
