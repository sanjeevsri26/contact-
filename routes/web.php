<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\loginController;
use App\Http\Controllers\Frontend\IndexController;



use App\Http\Controllers\Admin\dashboardController; 



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

// Route for the dashboard page, protected by auth middleware

// Routes for profile management, protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';

// Route for the home page
Route::get('/', [IndexController::class, 'index'])->name('home');

// Route to show the login form
Route::get('/form', [loginController::class, 'index'])->name('form.index');

// Route to handle the form submission
Route::post('/form', [loginController::class, 'store'])->name('form.store');

// Route to show the edit form for a specific record
Route::get('/form/edit/{id}', [loginController::class, 'edit'])->name('form.edit');

// Route to update a specific record
Route::put('/form/update/{id}', [loginController::class, 'update'])->name('form.update');

// Route to delete a specific record
Route::delete('/form/delete/{id}', [loginController::class, 'destroy'])->name('form.destroy');

// Route for the thank you page
Route::get('/thankyou', [loginController::class, 'thankyou'])->name('thankyou');



Route::get('/dashboard', [dashboardController::class, 'index']);
