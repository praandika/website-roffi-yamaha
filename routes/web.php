<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpesificationController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/products', [WebsiteController::class, 'product'])->name('website.product');
Route::get('/abouts', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/category/{param?}', [WebsiteController::class, 'category'])->name('website.category');
Route::get('/contacts', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/detail/{param?}', [WebsiteController::class, 'detail'])->name('website.detail');
Route::post('/search', [WebsiteController::class, 'search'])->name('website.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductController::class)->middleware(['auth', 'verified']);
Route::resource('banner', BannerController::class)->middleware(['auth', 'verified']);
Route::resource('about', AboutController::class)->middleware(['auth', 'verified']);
Route::resource('spesification', SpesificationController::class)->middleware(['auth', 'verified']);
Route::resource('contact', ContactController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
