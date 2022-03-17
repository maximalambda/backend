<?php

use App\Http\Controllers\CountryCodeController;
use App\Http\Controllers\RealStateController;
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
Route::group(['middleware' => ['json.response']], function () {

    Route::apiResources(['real_state' => RealStateController::class]);

 });


 Route::get('/country_codes', [CountryCodeController::class, 'index']);
