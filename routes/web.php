<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //return view('welcome');
    return 'Alejandro';
});

Route::get('/clase', function(){
    return view('mi-clase');
});

Route::get('/prueba-controller', 'PruebaController@index');

Route::resource('coins', 'CoinsController');

Route::get('register', 'AuthController@register')
    ->middleware(['validate_hour'])
    ->name('auth.register');
Route::post('register', 'AuthController@doRegister')
    ->middleware(['validate_hour'])
    ->name('auth.do-register');
Route::get('login', 'AuthController@login')
    ->middleware(['validate_hour'])
    ->name('auth.login');
Route::post('login', 'AuthController@doLogin')
    ->middleware(['validate_hour'])
    ->name('auth.do-login');
Route::any('logout', 'AuthController@logout')
    ->middleware(['validate_hour'])
    ->name('auth.logout');
