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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/admin', 'AdminController@index')->name('admin');

//News routes
Route::get('/admin/news/list', 'NewsController@index');
Route::get('/admin/news/create', 'NewsController@create');
Route::post('/admin/news/store', 'NewsController@store');
Route::get('/admin/news/edit/{id}', 'NewsController@edit');

//Testimonials routs
Route::get('/admin/testimonials/list', 'TestimonyController@index');
Route::get('/admin/testimonials/create', 'TestimonyController@create');
Route::post('/admin/testimonials/store', 'TestimonyController@store');
Route::get('/admin/testimonials/edit/{id}', 'TestimonyController@edit');
