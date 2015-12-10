<?php

Route::get('/', [
    'as' => 'home',
    'middleware' => 'auth',
    'uses' => 'PagesController@home'
]);

Route::controller(
    'auth',
    'Auth\AuthController',
    [
        'getLogin' => 'login',
        'getLogout' => 'logout',
        'getRegister' => 'register'
    ]
);

Route::controller(
    'password',
    'Auth\PasswordController',
    [
        'getEmail' => 'email',
        'getReset' => 'reset',
        'getChange' => 'change'
    ]
);

Route::get('/home', function(Illuminate\Http\Request $request) {
    \Event::fire(new \App\Events\UserLogin(Auth::user(), $request));

    dd('eb');
});