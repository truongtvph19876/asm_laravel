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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web'], function () {
    Route::post('cart', 'FrontendController@cart');
    Route::delete('cart/{id}', 'FrontendController@destroyCart');
});
Route::post('testCart', function (Request $req) {
    return response()->json($req->header('X-CSRF-TOKEN'));
});
