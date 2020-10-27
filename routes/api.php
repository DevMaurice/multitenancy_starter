<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
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
Route::post('/login',[LoginController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
        Route::get('/logout',[LoginController::class,'destroy']);
        Route::get('/user',[LoginController::class,'show']);
        // routes
});


