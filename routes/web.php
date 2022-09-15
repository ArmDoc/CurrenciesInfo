<?php

use App\Facades\CurrencyGetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/getCurrency/{ISO}', function ($ISO) {
	dd(CurrencyGetter::getCurrency($ISO));
});

Route::get('/getCurrencies', function () {
	dd(CurrencyGetter::getCurrencies());
});
