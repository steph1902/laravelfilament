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

// php artisan make:filament-relation-manager PatientResource treatments description
