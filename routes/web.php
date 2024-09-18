<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => view('welcome'))->name('home');

Route::get('all-products', [ProductController::class, 'index'])->name('all-products');
Route::get('product-details/{id}', [ProductController::class, 'productDetails'])->name('product-details');

Route::get('about-us', [ProductController::class, 'aboutUs'])->name('about-us');
Route::get('blog', [ProductController::class, 'blog'])->name('blog');
Route::get('faq', [ProductController::class, 'faq'])->name('faq');

Route::get('privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');
Route::get('return-exchanges-refund-policy', fn () => view('return-exchanges-refund-policy'))->name('return-exchanges-refund-policy');
Route::get('shipping-delivery', fn () => view('shipping-delivery'))->name('shipping-delivery');
Route::get('customer-appreciation', fn () => view('customer-appreciation'))->name('customer-appreciation');

Route::get('hot-items', [ProductController::class, 'hotItems'])->name('hot-items');
Route::get('new-collections', [ProductController::class, 'newCollections'])->name('new-collections');
Route::get('tops', [ProductController::class, 'tops'])->name('tops');
Route::get('pants', [ProductController::class, 'pants'])->name('pants');
Route::get('dresses', [ProductController::class, 'dresses'])->name('dresses');
Route::get('skirts', [ProductController::class, 'skirts'])->name('skirts');

// ALTER TABLE laravelfilament.products ADD show_prices_flag TINYINT NULL;
