<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;

use App\Http\Controllers\Teachers\TDashboardController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

use App\Models\Teachers; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return Inertia::render('Auth/Login', [
    ]);
});

// profile for admin and teachers
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Admin resources
// Dashboard Page
Route::resource('dashboard', DashboardController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

// Settings Page
Route::resource('settings', SettingsController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);


// Teachers Page
Route::resource('teachers', TeachersController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

// Sections Page
Route::resource('sections', SectionsController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

// Teachers resources
// Dashboard Page
Route::resource('teachers-dashboard', TDashboardController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
