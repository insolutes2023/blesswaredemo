<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about-us');
Route::get('contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
Route::get('book-keeping-financial-services', [App\Http\Controllers\HomeController::class, 'service'])->name('book-keeping-financial-services');
Route::post('contact-submit', [App\Http\Controllers\HomeController::class, 'contactSubmit'])->name('contact-submit');
Route::get('audit-assurance', [App\Http\Controllers\HomeController::class, 'audit'])->name('audit-assurance');
Route::get('tax-services', [App\Http\Controllers\HomeController::class, 'tax'])->name('tax-services');
Route::get('advisory-services', [App\Http\Controllers\HomeController::class, 'advisory'])->name('advisory-services');
