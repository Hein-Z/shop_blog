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

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index'] )->name('shop.index');
Route::get('/shop/{product}',[\App\Http\Controllers\ShopController::class,'show'])->name('shop.show');



Route::get('/terms', function () {
    return view('terms');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/about-us', function () {
    return view('about-us');
});
