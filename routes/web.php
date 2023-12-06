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
use App\Http\Controllers\ProfileController;

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


Route::get('/',[HomeController::class, 'index']);
Route::get('/myaccount',[MyAccountController::class, 'index']);
Route::get('/help',[HelpController::class, 'index']);
Route::get('/block',[BlockController::class, 'index']);
Route::get('/calendar',[CalendarController::class, 'index']);
Route::get('/chat',[ChatController::class, 'index']);
Route::get('/notes',[NotesController::class, 'index']);
Route::get('/profile',[ProfileController::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);
Route::get('/logout',[LogoutController::class, 'index']);



Route::get('/contact', [ContactController::class, 'index']);
Route::group([
    'prefix' => 'contact',
    'as' => 'contact.'
], function () {
    Route::get('list', [ContactController::class, 'index'])->name('list');
    Route::get('grid', [ContactController::class, 'grid'])->name('grid');
    Route::get('perfil', [ContactController::class, 'pergil'])->name('perfil');
});

Route::get('/store/products',[ProductsController::class, 'index']);
Route::get('/store/products/{id}',[ProductsController::class, 'details']);

Route::get('/invoice',[InvoiceController::class, 'index']);
Route::get('/invoice/{id}',[InvoiceController::class, 'details']);
