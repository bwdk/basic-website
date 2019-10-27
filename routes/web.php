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

Route::get('/', 'PagesController@getWelcome')->name('welcome');

Route::get('home', 'PagesController@getHome')->name('home');

Route::get('page', 'PagesController@getPage')->name('page');

Route::get('contact', 'PagesController@getContact')->name('contact');

Route::get('about', 'PagesController@getAbout')->name('about');

Route::get('todos', 'TodosController@index')->name('todos');
/*Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/page', function () {
    return view('page');
})->name('page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');*/

Route::get('contact/messages', 'ContactController@getMessages')->name('get-messages');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

