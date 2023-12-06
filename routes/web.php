<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InvoiceController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/myaccount', [MyAccountController::class, 'index']);
Route::get('/help', [HelpController::class, 'index']);
Route::get('/block', [BlockController::class, 'index']);
Route::get('/calendar', [CalendarController::class, 'index']);
Route::get('/chat', [ChatController::class, 'index']);
Route::get('/notes', [NotesController::class, 'index']);
Route::get('/notes-read', [NotesController::class, 'read']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/details/{id}', [InvoiceController::class, 'details']);
Route::group([
    'prefix' => 'contact',
    'as' => 'contact.'
], function () {
    Route::get('/list', [ContactController::class, 'list'])->name('list');
    Route::get('/grid', [ContactController::class, 'grid'])->name('grid');
    Route::get('/profile', [ContactController::class, 'profile'])->name('perfil');
});
Route::get('/products', [ProductsController::class, 'index']);
Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    Route::get('/list', [ProductsController::class, 'index'])->name('products');
    Route::get('/details/{id}', [ProductsController::class, 'details']);
});
