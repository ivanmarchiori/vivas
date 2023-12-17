<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
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
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/myaccount', [MyAccountController::class, 'index'])->name('myaccount')->middleware('auth');
Route::get('/help', [HelpController::class, 'index'])->name('help')->middleware('auth');
Route::get('/block', [BlockController::class, 'index'])->name('block')->middleware('auth');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar')->middleware('auth');
Route::get('/chat', [ChatController::class, 'index'])->name('chat')->middleware('auth');
Route::get('/notes', [NotesController::class, 'index'])->name('notes')->middleware('auth');
Route::get('/notes-read', [NotesController::class, 'read'])->name('notesRead')->middleware('auth');
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('auth');
Route::get('/lang/{lang}', [LanguageController::class, 'index'])->name('lang')->middleware('auth');

Route::group([
    'prefix' => 'invoice',
    'as' => 'invoice.'
], function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('invoice')->middleware('auth');
    Route::get('/details/{id}', [InvoiceController::class, 'details'])->name('details')->middleware('auth');
});


Route::group([
    'prefix' => 'login',
    'as' => 'login.'
], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
    Route::get('/recoverpw', [ForgotPasswordController::class,'forgotPassword'])->name('password');
    Route::post('/recoverpw', [ForgotPasswordController::class,'forgotPasswordPost'])->name('password.post');
    Route::post('/reset-password', [ForgotPasswordController::class,'resetPasswordPost'])->name('resetPassword.post');
    Route::get('/reset/{token}', [ForgotPasswordController::class,'resetPassword'])->name('reset');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register.post');
});

Route::group([
    'prefix' => 'contact',
    'as' => 'contact.'
], function () {
    Route::get('/list', [ContactController::class, 'list'])->name('list')->middleware('auth');
    Route::get('/grid', [ContactController::class, 'grid'])->name('grid')->middleware('auth');
    Route::get('/profile', [ContactController::class, 'profile'])->name('perfil')->middleware('auth');
});

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products')->middleware('auth');
    Route::get('/list', [ProductsController::class, 'index'])->name('list')->middleware('auth');
    Route::get('/details/{id}', [ProductsController::class, 'details'])->name('details')->middleware('auth');
});

