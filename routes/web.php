<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\frontend\HomepageController;

// ================================== backend ==================================

Route::prefix('admin')->group(function () {
    // Public Routes
    Route::get('/', [AuthController::class, 'LoginPage']);
    Route::get('/login', [AuthController::class, 'LoginPage']);
    Route::post('/login', [AuthController::class, 'do_login']);

    // Protected Routes (Require Authentication)
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/profile', [HomeController::class, 'profile']);
        Route::post('/profile', [HomeController::class, 'updateProfile']);
        Route::get('/homepage', [HomeController::class, 'homepage']);
        Route::get('/wesite-details', [HomeController::class, 'websiteDetails']);
        Route::post('/wesite-details', [HomeController::class, 'saveWebsiteDetails']);
        Route::post('/homepage', [HomeController::class, 'saveHomepages']);
        Route::get('/logout', [AuthController::class, 'logout']);
    });
});

// ================================== backend ==================================


Route::get('/', [HomepageController::class, 'homepage']);
Route::get('/about-us', [HomepageController::class, 'about']);
// Route::get('/programs', [HomepageController::class, 'programs']);
Route::get('/contact-us', [HomepageController::class, 'contact']);


define('IMAGE_UPLOAD_PATH', ('images/contentManagement/'));
define('SERVER_ERROR', ('Something went wrong, Please try again later.'));
