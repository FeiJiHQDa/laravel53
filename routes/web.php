<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'hello, world';
});

Route::group(['middleware' => ['web']], function () {
    //

    Route::any('form/create', ['uses' => 'FormController@create']);
    Route::any('form/index', ['uses' => 'FormController@index']);
    Route::any('form/detail/{id}', ['uses' => 'FormController@detail']);
    Route::any('form/update/{id}', ['uses' => 'FormController@update']);
    Route::any('form/delete/{id}', ['uses' => 'FormController@delete']);

    Route::post('/testJson', ['uses' => 'TextController@textArrayJson']);
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['web'], 'prefix' => 'bihu'], function () {
   Route::any('index.php', 'BiHu\IndexController@index');
});
