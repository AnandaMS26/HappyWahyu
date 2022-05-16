<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MeatPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CheckoutController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

Route::get('/aboutus', function(){
    return view('pages/aboutus');
});
Route::get('/user-login', function(){
    return view('pages/login');
});
Route::get('/user-register', function(){
    return view('pages/register');
});
// Route::get('/detail-product', function(){
//     return view('pages/detail_produk');
// });
Route::get('/my-account', function(){
    return view('pages/myaccount');
});
Route::get('/my-order', function(){
    return view('pages/myorder');
});
Route::get('/detail-order', function(){
    return view('pages/detail_order');
});
Route::get('/checkout-order', function(){
    return view('pages/checkout');
});
Route::get('/mycart', function(){
    return view('pages/cart');
});
Route::get('/detail-artikel', function(){
    return view('pages/detail_artikel');
});
// Route::get('/product', function(){
//     return view('pages/produk');
// });
Route::get('/article', function(){
    return view('pages/artikel');
});

Route::get('/product', 'App\Http\Controllers\ProdController@index')
    ->name('product');

Route::get('/detail_produk/{slug}', 'App\Http\Controllers\DetailController@index')
    ->name('detail_produk');

Route::post('/checkout/{id}', 'App\Http\Controllers\CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', 'App\Http\Controllers\CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'App\Http\Controllers\CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/remove/{detail_id}', 'App\Http\Controllers\CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/confirm/{id}', 'App\Http\Controllers\CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('dashboard');

        Route::resource('meat-package', MeatPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });
Auth::routes(['verify' => true]);