<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('all-products', function () {
//     return view('allproducts');
// });

Route::get('all-products', ProductController::class . '@index')->name('all-products');
Route::get('product-details/{id}', ProductController::class . '@productDetails')->name('product-details');

Route::get('about-us', ProductController::class . '@aboutUs')->name('about-us');
Route::get('blog', ProductController::class . '@blog')->name('blog');
Route::get('faq', ProductController::class . '@faq')->name('faq');




Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('return-exchanges-refund-policy', function () {
    return view('return-exchanges-refund-policy');
})->name('return-exchanges-refund-policy');

Route::get('shipping-delivery', function () {
    return view('shipping-delivery');
})->name('shipping-delivery');

Route::get('customer-appreciation', function () {
    return view('customer-appreciation');
})->name('customer-appreciation');

// https://t.me/+2JsS2nzNsrRkMGE9



// php artisan make:filament-relation-manager PatientResource treatments description
