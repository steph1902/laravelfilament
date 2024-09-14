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

Route::get('hot-items', ProductController::class . '@hotItems')->name('hot-items');
Route::get('new-collections', ProductController::class . '@newCollections')->name('new-collections');
Route::get('tops', ProductController::class . '@tops')->name('tops');
Route::get('pants', ProductController::class . '@pants')->name('pants');
Route::get('dresses', ProductController::class . '@dresses')->name('dresses');
Route::get('skirts', ProductController::class . '@skirts')->name('skirts');



// #todo
// Access to fetch at 'http://localhost:8000/storage/01J70YK3808XVCQS5RNT2SPH4F.jpg' 
// from origin 'http://127.0.0.1:8000' has been blocked by CORS policy: No 'Access-Control-Allow-Origin' 
// header is present on the requested resource. If an opaque response serves your needs, 
// set the request's mode to 'no-cors' to fetch the resource with CORS disabled.
