<?php


Route::apiResource('/class','App\Http\Controllers\Api\ClassController');
Route::apiResource('/subject','App\Http\Controllers\Api\SubjectController');


Route::group([


    'prefix' => 'auth'

], function () {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});




