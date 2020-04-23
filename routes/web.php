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

Route::get('/', 'PagesController@index');
Route::get('/featured', 'PagesController@featured');
Route::get('/contact', 'PagesController@contact');
Route::post('/send/email', 'PagesController@sendMail');

/*Since we will be showing photos on the dashboard, we don't need index method */
Route::resource('photos', 'PhotosController', [
    'only' => ['create', 'destroy','edit', 'show', 'store', 'update']
]);

Route::get('/albums/{album}/photos', 'AlbumController@photos');

Route::resource('albums', 'AlbumController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
