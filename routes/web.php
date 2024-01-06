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
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\SearchController;

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/myaccount', [MyAccountController::class, 'index'])->name('myaccount')->middleware('auth');
Route::get('/help', [HelpController::class, 'index'])->name('help')->middleware('auth');
Route::get('/block', [BlockController::class, 'index'])->name('block')->middleware('auth');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar')->middleware('auth');
Route::get('/notes', [NotesController::class, 'index'])->name('notes')->middleware('auth');
Route::get('/notes-read', [NotesController::class, 'read'])->name('notesRead')->middleware('auth');
Route::get('/lang/{lang}', [LanguageController::class, 'index'])->name('lang')->middleware('auth');

Route::group([
    'prefix' => 'invoice',
    'as' => 'invoice.'
], function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('invoice')->middleware('auth');
    Route::get('/details/{id}', [InvoiceController::class, 'details'])->name('details')->middleware('auth');
});


Route::group([
    'prefix' => 'partners',
    'as' => 'partners.'
], function () {
    Route::get('/', [PartnersController::class, 'index'])->name('partners')->middleware('auth');
});


Route::group([
    'prefix' => 'login',
    'as' => 'login.'
], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
    Route::get('/recoverpw', [ForgotPasswordController::class, 'forgotPassword'])->name('password');
    Route::post('/recoverpw', [ForgotPasswordController::class, 'forgotPasswordPost'])->name('password.post');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPasswordPost'])->name('resetPassword.post');
    Route::get('/reset/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register.post');
});


Route::group([
    'prefix' => 'search',
    'as' => 'search.'
], function () {
    Route::get('/', [SearchController::class, 'index'])->name('search.index')->middleware('auth');
});


Route::group([
    'prefix' => 'setup',
    'as' => 'setup.'
], function () {
    Route::get('/', [SetupController::class, 'setup'])->name('setup');
    Route::get('/emails', [SetupController::class, 'emails'])->name('emails');
    Route::get('/goals', [SetupController::class, 'goals'])->name('goals');
    Route::get('/param', [SetupController::class, 'param'])->name('param');
    Route::get('/products', [SetupController::class, 'products'])->name('products');
    Route::get('/reasons', [SetupController::class, 'reasons'])->name('reasons');
    Route::get('/tags', [SetupController::class, 'tags'])->name('tags');
    Route::get('/users', [SetupController::class, 'users'])->name('users');
});

Route::group([
    'prefix' => 'leads',
    'as' => 'leads.'
], function () {
    Route::get('/list', [LeadsController::class, 'list'])->name('list')->middleware('auth');
    Route::get('/grid', [LeadsController::class, 'grid'])->name('grid')->middleware('auth');
    Route::get('/list-details/{id}', [LeadsController::class, 'details'])->name('list-details')->middleware('auth');
});

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products')->middleware('auth');
    Route::get('/list', [ProductsController::class, 'index'])->name('list')->middleware('auth');
    Route::get('/details/{id}', [ProductsController::class, 'details'])->name('details')->middleware('auth');
});
