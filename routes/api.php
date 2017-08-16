<?php

Route::get('/oauth/etuutt/link', ['uses' => 'OAuthController@getRedirectLink']);
Route::post('/oauth/etuutt/callback', ['uses' => 'OAuthController@mobileCallback']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/oauth/token/revoke', ['uses' => 'OAuthController@revokeApiToken']);
    Route::post('/oauth/token/check', ['uses' => 'OAuthController@checkApiToken']);

    Route::get('/student/{id?}', ['uses' => 'StudentsController@find']);

    Route::get('/team/{id?}', ['uses' => 'TeamsController@index']);

    Route::get('/checkin/{id}', ['uses' => 'CheckinController@show']);
    Route::get('/checkin', ['uses' => 'CheckinController@index']);
    Route::post('/checkin', ['uses' => 'CheckinController@store']);
    Route::put('/checkin/{id}/student', ['uses' => 'CheckinController@addStudent']);

});
