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

Route::get('/cart', [\App\Http\Controllers\CartController::class,'index'])->name('shop.cart');
Route::post('/cart', [\App\Http\Controllers\CartController::class,'store'])->name('shop.cart.store');
Route::delete('/cart/empty', [\App\Http\Controllers\CartController::class,'empty'])->name('shop.cart.empty');
Route::delete('/cart/{id}/remove', [\App\Http\Controllers\CartController::class,'remove'])->name('shop.cart.remove');

Route::get('/saved', [\App\Http\Controllers\SavedItemsController::class,'index'])->name('shop.saved');
Route::post('/switchToSaved/{id}', [\App\Http\Controllers\SavedItemsController::class,'switchToSaved'])->name('shop.saved.switchToSaved');
Route::post('/switchToCart/{id}', [\App\Http\Controllers\SavedItemsController::class,'switchToCart'])->name('shop.saved.switchToCart');
Route::delete('/saved/empty', [\App\Http\Controllers\SavedItemsController::class,'empty'])->name('shop.saved.empty');
Route::delete('/saved/{id}/remove', [\App\Http\Controllers\SavedItemsController::class,'remove'])->name('shop.saved.remove');



Route::get('/checkout', function () {
    return view('checkout');
})->name('shop.checkout');

Route::get('/terms', function () {
    return view('terms');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact', function () {
    return view('contact');
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
