<?php

use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\AdvertiserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TagsController;
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
Route::apiResource('tags', TagsController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('ads', AdController::class);

Route::prefix('advertiser')->group(function () {
    Route::get('/{advertiser}/ads',[AdvertiserController::class,'advertiser_ads']);
});
