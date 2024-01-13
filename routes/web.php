<?php

use App\Livewire\Product;
use App\Livewire\ProductDetail;
use App\Livewire\Testing;
use App\Livewire\UserShow;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', Testing::class)->name('testing');
Route::get('user/{user}', UserShow::class)->name('user_show');
Route::get('product', Product::class)->name('product');
Route::get('product/{slug}', ProductDetail::class)->name('product_detail');
