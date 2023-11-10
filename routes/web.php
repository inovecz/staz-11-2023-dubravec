<?php

use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
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

Route::get('/dashboard', function () {
    if (Auth::check()) {
        return view('dashboard');
    } else {
        return view('register');
    }
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Clients routes
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::get('/clients/{id}', [ClientController::class, 'view'])->name('clients.view');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::post('/clients/create', [ClientController::class, 'createPost'])->name('clients.createPost');
Route::post('/clients/{id}/edit', [ClientController::class, 'editPost'])->name('clients.editPost');
Route::post('/clients/{id}/delete', [ClientController::class, 'deletePost'])->name('clients.deletePost');


// categories routes
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}', [ProductController::class, 'view'])->name('products.view');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/products/create', [ProductController::class, 'createPost'])->name('products.createPost');
Route::post('/products/{id}/edit', [ProductController::class, 'editPost'])->name('products.editPost');
Route::post('/products/{id}/delete', [ProductController::class, 'deletePost'])->name('products.deletePost');


// Categories routes
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{id}', [CategoryController::class, 'view'])->name('categories.view');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::post('/categories/create', [CategoryController::class, 'createPost'])->name('categories.createPost');
Route::post('/categories/{id}/edit', [CategoryController::class, 'editPost'])->name('categories.editPost');
Route::post('/categories/{id}/delete', [CategoryController::class, 'deletePost'])->name('categories.deletePost');