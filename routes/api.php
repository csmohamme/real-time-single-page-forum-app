<?php


Route::apiResource('/question', 'QuestionController');

Route::apiResource('category', 'CategoryController');

Route::apiResource('question/{question}/reply', 'ReplyController');

Route::post('like/{reply}', 'LikeController@Likeit');

Route::delete('like/{reply}', 'LikeController@unLikeit');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('singup', 'AuthController@singup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});