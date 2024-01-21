<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
});

// Showing all cars
Route::get('/cars', [CarController::class, 'index']);

// Showing create new car form
Route::get('/cars/new', [CarController::class, 'create'])->middleware('auth');

// Storing new car into database
Route::post('/cars', [CarController::class, 'store'])->middleware('auth');

// Showing car manage page
Route::get('cars/manage', [CarController::class, 'manage'])->middleware('auth');

// Showing car edit form
Route::get('/cars/edit/{car}', [CarController::class, 'edit'])->middleware('auth');

// Delete car
Route::post('cars/delete/{car}', [CarController::class, 'destroy'])->middleware('auth');

// Showing single car
Route::get('/cars/{car}', [CarController::class, 'show']);

// Showing registration form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Registering user in the database
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// Showing login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Logging user in
Route::post('/login', [UserController::class, 'authenticate']);

// Logging user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Showing contact form
Route::get('/contact', [ContactController::class, 'contact']);

// Storing contact message
Route::post('/contact', [ContactController::class, 'storeMessage']);