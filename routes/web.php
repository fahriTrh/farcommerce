<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FarcommerceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [FarcommerceController::class, 'index']);
Route::get('/load-more', [FarcommerceController::class, 'loadMore']);
Route::get('/show/{product:slug}', [FarcommerceController::class, 'show']);
Route::get('/cart', [FarcommerceController::class, 'cart']);
Route::post('/cartStore', [FarcommerceController::class, 'cartStore']);
Route::delete('/cartDestroy', [FarcommerceController::class, 'cartDestroy'])->name('cartDestroy');

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/category/checkSlug', [CategoryController::class, 'checkSlug']);
Route::resource('/admin/category', CategoryController::class, ['as' => 'admin'])->middleware(['auth', 'verified']);

Route::get('/admin/product/checkSlug', [ProductController::class, 'checkSlug']);
Route::resource('/admin/product', ProductController::class, ['as' => 'admin'])->middleware(['auth', 'verified']);
  

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
