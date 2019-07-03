<?php

use Illuminate\Http\Request;

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

\Illuminate\Support\Facades\Route::get('/php_info',function() {      phpinfo();
});

Route::apiresource('/info','InfoController');
Route::apiresource('/users','UserController');


Route::post("user/register","AuthApiController@register");
Route::post("user/login","AuthApiController@login");
Route::post("user/logout","AuthApiController@logout");