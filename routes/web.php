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

/* PagesController routes */
Route::get('/', 'PagesController@index');
Route::get('/openings', 'PagesController@openings');
Route::get('/opening/job/{id}', 'PagesController@opening')->name('opening.show');

Auth::routes();

/* HomeController routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{name}', 'HomeController@profile')->name('profile');
Route::post('/profile/update/{id}', 'HomeController@updateProfile')->name('profile.update');
Route::post('/profile/userimg/{filename}', 'HomeController@getAvatar')->name('profile.avatar');

/* JobsController routes */
Route::post('/home', 'JobsController@store')->name('job.store');
Route::post('/home/{id}', 'JobsController@update')->name('job.update');
Route::post('/home/delete/{id}', 'JobsController@destroy')->name('job.destroy');
Route::post('/home/close/{id}', 'JobsController@closeJob')->name('job.close');
Route::get('/home/edit/{id}', 'JobsController@edit')->name('job.edit');

/* ApplicantsController routes */
Route::post('/opening/apply/{id}', 'ApplicantsController@store')->name('app.store');
Route::get('/home/view/{id}', 'ApplicantsController@show')->name('app.show');
Route::get('/download/cv/{id}', 'ApplicantsController@cv')->name('app.cv');
Route::get('/download/cover/{id}', 'ApplicantsController@cover')->name('app.cover');


