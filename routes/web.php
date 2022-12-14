<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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
Route::post('contact', [HomeController::class, 'contactStore'])->name('contact.store');
Route::get('events', [HomeController::class, 'events'])->name('events');
Route::get('offline', [HomeController::class, 'offlineStore'])->name('offline.store');


Route::get('store', [HomeController::class, 'store'])->name('store');
Route::get('detail-produk/{id}', [ProductController::class, 'detailProduk'])->name('detail.produk');

Route::get('cart', [ProductController::class, 'cart'])->name('cart');

Route::post('cart/ganti-qty/{id}', [ProductController::class, 'gantiQty'])->name('ganti.qty');

Route::get('cart/apus-brg/{id}', [ProductController::class, 'apusBarang'])->name('apus.brg');
Route::get('cart/apus-semua', [ProductController::class, 'apusSemua'])->name('apus.semua');

Route::post('checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('pemesanan/{id}', [ProductController::class, 'pemesanan'])->name('pemesanan');

Route::get('service', [HomeController::class, 'service'])->name('service');

Route::get('invoice/{id}',[ProductController::class, 'invoice'])->name('invoice');
Route::get('daftar-pesanan',[HomeController::class, 'daftarPesanan'])->name('daftar.pesanan');

Route::middleware('guest')->group(function () {


    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::get('login', [UserController::class, 'login'])->name('login');

    Route::post('login_store', [UserController::class, 'loginStore'])->name('login.store');
    Route::post('register_store', [UserController::class, 'registerStore'])->name('register.store');

    Route::get('forgot_password', [UserController::class, 'forgotPassword'])->name('forgot.password');
    Route::post('forgot_send', [UserController::class, 'forgotSend'])->name('forgot.send');



});

Route::middleware('auth')->group(function() {

    Route::get('user/{id}', [UserController::class, 'userDetail'])->name('user.detail');
    Route::get('user/edit/{id}', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('user/update/{id}', [UserController::class, 'updateUser'])->name('user.update');

    Route::post('product/update-pp/{id}', [UserController::class, 'updatePp'])->name('update.pp');

    Route::get('logout', [UserController::class, 'logout'])->name('logout');

});

Route::middleware('admin')->group(function(){

    // Dashboard Page

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Products

    Route::get('products', [AdminController::class, 'products'])->name('products');
    Route::get('product/create', [AdminController::class, 'productCreate'])->name('product.create');
    Route::post('product/store', [AdminController::class, 'productStore'])->name('product.store');
    Route::get('product/edit/{id}', [AdminController::class, 'productEdit'])->name('product.edit');
    Route::post('product/update/{id}', [AdminController::class, 'productUpdate'])->name('product.update');
    Route::get('product/destroy/{id}', [AdminController::class, 'productDestroy'])->name('product.destroy');
    Route::post('product/update-img/{id}', [AdminController::class, 'updateImage'])->name('update.image');

    // Services

    Route::get('serviss', [AdminController::class, 'serviss'])->name('serviss');
    Route::get('servis/create', [AdminController::class, 'servisCreate'])->name('servis.create');
    Route::post('servis/store', [AdminController::class, 'servisStore'])->name('servis.store');
    Route::get('servis/edit/{id}', [AdminController::class, 'servisEdit'])->name('servis.edit');
    Route::post('servis/update/{id}', [AdminController::class, 'servisUpdate'])->name('servis.update');
    Route::get('servis/destroy/{id}', [AdminController::class, 'servisDestroy'])->name('servis.destroy');
    Route::post('servis/update-img/{id}', [AdminController::class, 'updateServiceImage'])->name('update.service.image');

    // Message Function

    Route::get('pesan', [AdminController::class, 'pesan'])->name('pesan');
    Route::post('pesan/delete/{id}', [AdminController::class, 'messagesDestroy'])->name('messages.destroy');

    // Pesanan

    Route::get('orders', [AdminController::class, 'order'])->name('order');
    Route::get('orders/detail/{id}', [AdminController::class, 'orderDetail'])->name('order.detail');
    Route::post('orders/detail/update/{id}', [AdminController::class, 'updateStatus'])->name('status.update');
});
