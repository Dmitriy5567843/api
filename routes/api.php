<?php

use App\Http\Controllers\Api\LineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StationController;

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

Route::group(['prefix' => '/v1'], function () {

    Route::group(['prefix' => '/lines'], function () {
       Route::get('/', [LineController::class, 'index']);
       Route::get('/{id}', [LineController::class, 'view']);
       Route::post('/create', [LineController::class, 'create']);
       Route::put('/update/{id}', [LineController::class, 'update']);
       Route::delete('/delete/{id}', [LineController::class, 'delete']);
    });

    Route::group(['prefix' => '/station'], function () {
        Route::get('/', [StationController::class, 'index']);
        Route::get('/{id}', [StationController::class, 'view']);
        Route::post('/create', [StationController::class, 'create']);
        Route::put('/update/{id}', [StationController::class, 'update']);
        Route::delete('/delete/{id}', [StationController::class, 'delete']);
    });
});


