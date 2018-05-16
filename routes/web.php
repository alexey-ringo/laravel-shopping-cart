<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('shop/index');
});
*/

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    //route name
    'as' => 'product.index'
]);

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    //route name
    'as' => 'login'
    
]);

Route::group(['prefix' => 'user'], function() {
    
    Route::group(['middleware' => 'guest'], function() {
        
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            //route name
            'as' => 'user.signup',
            //'middleware' => 'guest'
        ]);
    
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            //route name
            'as' => 'user.signup',
            //'middleware' => 'guest'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            //route name
            'as' => 'user.signin',
            //'middleware' => 'guest'
    ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            //route name
            'as' => 'user.signin',
            //'middleware' => 'guest'
        ]);
    });
    
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            //route name
            'as' => 'user.profile',
            //'middleware' => 'auth'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            //route name
            'as' => 'user.logout',
            //'middleware' => 'auth'
        ]);
        
    });
    
});


