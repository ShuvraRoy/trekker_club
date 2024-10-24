<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('/about-us', [App\Http\Controllers\UserActivityController::class, 'about_us']);
Route::get('/team', [App\Http\Controllers\UserActivityController::class, 'team']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'get_login'])->name('login');
Route::post('/post_login', [App\Http\Controllers\Auth\LoginController::class, 'post_login']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/post_registration', [App\Http\Controllers\Auth\RegisterController::class, 'post_registration']);

Route::prefix('/activities')->group(function () {
    Route::get('/', [App\Http\Controllers\UserActivityController::class, 'index']);
    Route::get('/{name}', [App\Http\Controllers\UserActivityController::class, 'show'])->name('activity.show'); // For individual activity details
    Route::post('/sessions/book/{id}', [App\Http\Controllers\UserActivityController::class, 'book'])->name('sessions.book');
});

//admin routes
Route::group(['middleware' => 'is_admin_user'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::prefix('users')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index']);
            Route::post('/destroy', [App\Http\Controllers\Admin\UserController::class, 'destroy']);
            Route::post('/get_user_data', [App\Http\Controllers\Admin\UserController::class, 'fetch_user_data']);
        });

        Route::prefix('activities')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ActivityController::class, 'index']);
            Route::post('/store', [App\Http\Controllers\Admin\ActivityController::class, 'store']);
            Route::post('/update', [App\Http\Controllers\Admin\ActivityController::class, 'update']);
            Route::post('/destroy', [App\Http\Controllers\Admin\ActivityController::class, 'destroy']);
            Route::post('/get_activity_data', [App\Http\Controllers\Admin\ActivityController::class, 'fetch_activity_data']);
        });

        Route::prefix('sessions')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\SessionController::class, 'index']);
            Route::post('/store', [App\Http\Controllers\Admin\SessionController::class, 'store']);
            Route::post('/update', [App\Http\Controllers\Admin\SessionController::class, 'update']);
            Route::post('/destroy', [App\Http\Controllers\Admin\SessionController::class, 'destroy']);
            Route::post('/get_session_data', [App\Http\Controllers\Admin\SessionController::class, 'fetch_session_data']);
        });
        Route::prefix('participants')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ParticipantsController::class, 'index']);
            Route::post('/get_participant_data', [App\Http\Controllers\Admin\ParticipantsController::class, 'fetch_participant_data']);
        });

    });
});