<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController; // Make sure this is imported

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

// Route for the root URL ('/') pointing to the index method of WelcomeController
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// Your existing resource route
Route::resource('users', UserController::class);

// Route for handling contact form submissions
Route::post('/contact', [WelcomeController::class, 'sendContactMessage'])->name('contact.send');