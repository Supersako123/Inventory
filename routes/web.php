<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Products
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductsController::class, 'view'])->name('products');
    Route::get('/products/add', [ProductsController::class, 'add'])->name('products.add');
    Route::get('/products/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::delete('/products', [ProductsController::class, 'delete'])->name('products');
    Route::patch('/products', [ProductsController::class, 'patch'])->name('products');
    Route::post('/products', [ProductsController::class, 'store'])->name('products');
});

// Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');
});

// User Management
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserManagementController::class, 'view'])->name('users');
    Route::get('/users/edit', [UserManagementController::class, 'edit'])->name('users.edit');
    Route::get('/users/add', [UserManagementController::class, 'add'])->name('users.add');
    Route::post('/users', [UserManagementController::class, 'store'])->name('users');
    Route::patch('/users', [UserManagementController::class, 'patch'])->name('users');
    Route::delete('/users', [UserManagementController::class, 'delete'])->name('users');
});

// Categories

Route::middleware('auth')->group(function () {
    Route::get('/categories', [CategoryController::class, 'view'])->name('categories');
    Route::get('/categories/add', [CategoryController::class, 'add'])->name('categories.add');
    Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories');
    Route::patch('/categories', [CategoryController::class, 'patch'])->name('categories');
    Route::delete('/categories', [CategoryController::class, 'delete'])->name('categories');
});

// Sales

Route::get('/sales', [SalesController::class, 'view'])
    ->middleware(['auth'])
    ->name('sales');

URL::forceScheme('https');


require __DIR__ . '/auth.php';
