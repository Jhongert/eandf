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
    return view('home');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/admin', 'AdminController@index')->name('admin');

//News routes
Route::get('/admin/news', 'NewsController@index');
Route::get('/admin/news/create', 'NewsController@create');
Route::post('/admin/news', 'NewsController@store');
Route::get('/admin/news/{id}', 'NewsController@edit');
Route::put('/admin/news/{id}', 'NewsController@update');
Route::delete('/admin/news/{id}', 'NewsController@destroy');

//Testimonials routs
Route::get('/admin/testimonials', 'TestimonialController@index');
Route::get('/admin/testimonials/create', 'TestimonialController@create');
Route::post('/admin/testimonials', 'TestimonialController@store');
Route::put('/admin/testimonials/{id}', 'TestimonialController@update');
Route::get('/admin/testimonials/{id}', 'TestimonialController@edit');
Route::delete('/admin/testimonials/{id}', 'TestimonialController@destroy');

