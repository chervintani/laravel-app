<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('pages.products.index');
// })->middleware(['auth', 'verified'])->name('pages.products.index');

require __DIR__.'/auth.php';

Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Route::resource('order', OrderController::class);
