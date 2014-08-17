<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/user', function()
{
    $data = array('name' => 'Chris');
    return Response::make(json_encode($data), 200,
        array('Content-Type' => 'application/json'));
});


Route::group(array('prefix' => 'api/v1'), function() {
    Route::resource('urld', 'UrlController@getIndexd');
     Route::resource('url', 'UrlController@getIndex');
});

