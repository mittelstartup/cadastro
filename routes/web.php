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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');


//Upload do comprovante
Route::post('/estariario/upload', 'EstagiarioController@upload');

//Remoção do comprovante
Route::get('removeranexo/{userId}/{fileId}', 'EstagiarioController@destroy');
Route::get('view/{userId}/{fileId}', 'EstagiarioController@view');