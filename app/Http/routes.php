<?php

Route::get('/', [
    'as' => 'home',
    'middleware' => 'auth',
    function () {
        return view('home');
    }
]);

Route::group([
    'prefix' => 'auth',
    'namespace' => 'Auth'
], function() {
    Route::get('login', [
        'as' => 'login',
        'uses' => 'AuthController@getLogin'
    ]);
    Route::post('login', 'AuthController@postLogin');

    Route::get('logout', [
        'as' => 'logout',
        'uses' => 'AuthController@getLogout'
    ]);

    Route::get('register', [
        'as' => 'register',
        'uses' => 'AuthController@getRegister'
    ]);
    Route::post('register', 'AuthController@postRegister');
});