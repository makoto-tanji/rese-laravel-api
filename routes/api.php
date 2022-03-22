<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// 以下追加
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;

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

//JWT認証関係
Route::group([
    'middleware' => ['auth:api'],
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register'])->withoutMiddleware(['auth:api']);
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(['auth:api']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user', [AuthController::class, 'me']);
});

Route::apiResource('/shop', ShopController::class)->only([
    'index', 'show'
])->withoutMiddleware(['auth:api']);
Route::apiResource('/reservation', ReservationController::class)->only([
    'index', 'store'
])->withoutMiddleware(['auth:api']);