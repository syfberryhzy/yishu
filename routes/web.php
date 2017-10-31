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

// Route::get('/', function () {
//     return view('index');
// });
Auth::routes();
Route::get('/', 'IndexController@index')->name('home');
Route::get('/case', 'IndexController@case')->name('case');
Route::get('/case/{id}', 'IndexController@caseInfo')->name('caseInfo');
Route::get('/awards', 'IndexController@award')->name('awards');
Route::get('/abouts', 'IndexController@about')->name('abouts');
Route::get('/news', 'IndexController@news')->name('news');
Route::get('/news/{id}', 'IndexController@newsInfo')->name('newsInfo');
Route::get('/contact', 'IndexController@contact')->name('contact');
