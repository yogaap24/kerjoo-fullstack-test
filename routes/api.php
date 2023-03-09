<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('annual-leaves')->group(function () {
    Route::get('', 'AnnualLeaveController@index')->name('annualLeave.index');
    Route::post('', 'AnnualLeaveController@store')->name('annualLeave.store');
    Route::get('/{id}', 'AnnualLeaveController@show')->name('annualLeave.show');
});
