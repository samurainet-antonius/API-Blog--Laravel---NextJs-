<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antonius\AuthController;
use App\Http\Controllers\Antonius\CategoryController;
use App\Http\Controllers\Antonius\NewsController;
use App\Http\Controllers\Antonius\UsersController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'master'],function(){

    Route::group(['prefix' => 'category'],function(){
        Route::get('/',[CategoryController::class,'show']);
        Route::post('/create',[CategoryController::class,'create']);
        Route::put('/update/{uuid}',[CategoryController::class,'update']);
        Route::delete('/delete/{uuid}',[CategoryController::class,'delete']);
    });

    Route::group(['prefix' => 'news'],function(){
        Route::get('/',[NewsController::class,'show']);
        Route::post('/create',[NewsController::class,'create']);
        Route::put('/update/{uuid}',[NewsController::class,'update']);
        Route::delete('/delete/{uuid}',[NewsController::class,'delete']);
    });

    Route::group(['prefix' => 'users'],function(){
        Route::get('/',[UsersController::class,'show']);
        Route::post('/create',[UsersController::class,'create']);
        Route::put('/update/{uuid}',[UsersController::class,'update']);
        Route::delete('/delete/{uuid}',[UsersController::class,'delete']);
    });
});

Route::group(['prefix' => 'auth'],function(){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
});
