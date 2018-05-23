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



Auth::routes();
Route::get('/logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->back();
});


//APP
Route::group(['prefix' => '', 'namespace' => 'App'], function(){
    Route::get('/', ['uses' => 'StaticsController@home']);
    Route::get('/galeries', ['uses' => 'StaticsController@showGaleries']);
    Route::get('/logements', ['uses' => 'StaticsController@showLogement']);
    Route::get('/reservation', ['uses' => 'StaticsController@showReservation']);
    Route::get('/acces', ['uses' => 'StaticsController@showAcces']);
    
});

//ADMIN
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', ['uses' => 'DashboardController@dashboard']);
    Route::post('passowrd/modify', ['uses' => 'AccountController@store']);
    Route::resources( [
        'users'        => 'Cms\UsersController',
        'pages'        => 'Cms\PagesController',
    ] );
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('login', ['uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['uses' => 'Auth\LoginController@logout']);
});
