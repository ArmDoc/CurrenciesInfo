<?php

use App\Facades\CurrencyGetter;
use App\Http\Controllers\CurrencyController;
use App\Http\Resources\CurrenciesResourc;
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

Route::apiResource('currency', CurrencyController::class);

Route::post('currency/select/{currency}', [CurrencyController::class, 'select']);