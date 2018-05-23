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

Route::get('/', 'viewsController@home')->name('home');
Route::get('/work', 'viewsController@work')->name('work');
Route::get('/skills', 'viewsController@skills')->name('skills');
Route::get('/contact', 'viewsController@contact')->name('contact');

?>