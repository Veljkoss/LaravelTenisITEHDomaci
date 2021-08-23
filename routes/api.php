<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TennisMatchController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/player', [PlayerController::class, 'index']);

Route::get('/player/{id}', [PlayerController::class, 'show']);

Route::post('/player', [PlayerController::class, 'store']);

Route::put('/player/{id}', [PlayerController::class, 'update']);

Route::delete('/player/{id}', [PlayerController::class, 'destroy']);

Route::get('/tennis_match', [TennisMatchController::class, 'index']);

Route::post('/tennis_match', [TennisMatchController::class, 'store']);


// Route::post('/player', function(){
//     return;
// });
