<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Products\ProductController;

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
});



// Route::post('/register', 'AuthController@register');
// Route::post('/login', 'AuthController@login');
// Route::post('/login', 'AuthController@login');
// Route::post('register', [AuthController::class, 'register']);
// Route::post('login', [AuthController::class, 'login']);



// Route::group( ['middleware' => ['auth:sanctum']], function(){

//     Route::apiResource('products', 'ProductController');
    
// });


// Routes for Products
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::put('products/update/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);