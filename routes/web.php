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
//Route::post('/product-image', [\App\Http\Controllers\ShopController::class, 'productImageApi'])->name('product-image');
Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [\App\Http\Controllers\ShopController::class, 'show'])->name('shop.show');
Route::post('/shop/products/search', [\App\Http\Controllers\ShopController::class, 'search'])->name('shop.search');


//Cart
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('shop.cart');
Route::get('/cart/data', [\App\Http\Controllers\CartController::class, 'getCartData'])->name('shop.cart.data');
//Route::get('/cart/items' , [\App\Http\Controllers\CartController::class, 'getCartItems'])->name('shop.cart.items');

Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])->name('shop.cart.store');
Route::patch('/cart/{product}', [\App\Http\Controllers\CartController::class, 'update'])->name('shop.cart.update');
Route::delete('/cart/empty', [\App\Http\Controllers\CartController::class, 'empty'])->name('shop.cart.empty');
Route::delete('/cart/{id}/remove', [\App\Http\Controllers\CartController::class, 'remove'])->name('shop.cart.remove');

//Save for later
//Route::get('/saved', [\App\Http\Controllers\SavedItemsController::class,'index'])->name('shop.saved');Route::get('/saved', [\App\Http\Controllers\SavedItemsController::class,'index'])->name('shop.saved');
Route::post('/switchToSaved/{id}', [\App\Http\Controllers\SavedItemsController::class, 'switchToSaved'])->name('shop.saved.switchToSaved');
Route::post('/switchToCart/{id}', [\App\Http\Controllers\SavedItemsController::class, 'switchToCart'])->name('shop.saved.switchToCart');
Route::delete('/saved/empty', [\App\Http\Controllers\SavedItemsController::class, 'empty'])->name('shop.saved.empty');
Route::delete('/saved/{id}/remove', [\App\Http\Controllers\SavedItemsController::class, 'remove'])->name('shop.saved.remove');

//checkout
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('shop.checkout')->middleware('auth');
Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store'])->name('shop.checkout.store');
Route::get('/guest-checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('shop.guest.checkout');


//confirmation
Route::get('/thank-you', [\App\Http\Controllers\ConfirmationController::class, 'index'])->name('confirmation.index');

//coupon
Route::post('/coupon', [\App\Http\Controllers\CouponController::class, 'store'])->name('coupon.store');
Route::delete('/coupon', [\App\Http\Controllers\CouponController::class, 'destroy'])->name('coupon.destroy');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/products/best-selling', [\App\Http\Controllers\ReportController::class, 'bestSellingReport'])->name('products.best-selling')->middleware('admin.user');
    Voyager::routes();
});


Auth::routes();
