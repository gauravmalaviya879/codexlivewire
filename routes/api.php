<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
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

Route::group(['middleware'=>'api'],function($routes){
    Route::post('register',[usersController::class,'registerApi']);
    Route::post('login',[usersController::class,'loginApi']);
    Route::post('userProfile',[usersController::class,'userProfile']);
    Route::post('refresh',[usersController::class,'refresh']);
    Route::post('logoutAuth',[usersController::class,'logoutAuth']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
