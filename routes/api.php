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

//Route::any('/user', function (Request $request) {
////    return $request->user();
//    return '000';
//})->middleware('auth:api');


Route::get('/', function () {
    return view('welcome');
});