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

Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/electoralereform', 'PagesController@electoralreform')->name('elc');
Route::get('/ed', 'PagesController@ed')->name('ed');
Route::get('/dflpress', 'PagesController@dflpress')->name('dflpress');
Route::get('/press_on_ecowas', 'PagesController@ecowas')->name('ecowas');
Route::get('/digadv', 'PagesController@digadv')->name('digadv');
Route::get('/aboutus', 'PagesController@aboutus')->name('aboutus');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/blog', 'PagesController@blog')->name('blog');


Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

 Route::resource('news', 'NewsController');
