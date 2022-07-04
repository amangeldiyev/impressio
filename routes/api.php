<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
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

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function ($route) {
    $route->post('/logout', [LogoutController::class, 'logout']);
    $route->get('/user', [ProfileController::class, 'show']);
    $route->put('/user', [ProfileController::class, 'store']);
    
    $route->resource('buildings', BuildingController::class);
    $route->resource('events', EventController::class);
});
