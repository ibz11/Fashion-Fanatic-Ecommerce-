<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\authController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user(); 

    Route::post('login', [authController::class, 'signin']);
Route::post('register', [authController::class, 'signup']);
     
//Route::middleware('auth:sanctum')->group( function () {
  //  Route::resource('api_category', CategoryController::class);
});

