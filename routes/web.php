<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');
Route::get('/shop', function () {
    return view('pages.shop.shop');
})->name('shop');
Route::get('/shop/details', function () {
    return view('pages.shop.shop_details');
})->name('shop.details');
Route::get('/blogs', function () {
    return view('pages.blogs.index');
})->name('blogs');
Route::get('/blogs/details', function () {
    return view('pages.blogs.details');
})->name('blogs.details');
Route::get('contact', function () {
    return view('pages.contact.index');
})->name('contact.index');
Route::get('shopping-cart', function () {
    return view('pages.cart.index');
})->name('cart.index');
Route::get('checkout', function () {
    return view('pages.checkout.index');
})->name('checkout.index');
Route::get('admin/dashboard', function () {
    return view('admin.dashboard')->name('admin.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
