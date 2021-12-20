<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::prefix('auth')->group(function () {
    //api/auth/register
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::group(['middleware' => ['auth:sanctum']], function () {
        // Route::get('/user', AuthController::class, 'user');
        Route::post('/logout', [AuthController::class, 'logout']);
    });
    Route::get('/authentication-failed', [AuthController::class, 'authFailer'])->name('auth-failed');

});

Route::group(['prefix' => 'lookups'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('country', CountryController::class);

});

//Opportunities
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('opportunity', OpportunityController::class);

});

// Questions
Route::get('questions',[ QuestionController::class, 'index']);
Route::post('question', [QuestionController::class, 'store']);
Route::put('question/{question}', [QuestionController::class, 'update']);

// Favorites
Route::get('/favourite',[ FavouriteController::class, 'index']);
Route::post('/favourite', [FavouriteController::class, 'store']);
Route::put('/favourite/{favorite}', [FavouriteController::class, 'update']);

// ToDo: Upload Images for Opportunities and Forum
