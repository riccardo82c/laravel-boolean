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

Route::get('/', 'StaticController@index')->name('home');
Route::get('/contatti', 'StaticController@contact')->name('contact');

Route::get('/studenti', 'StudentController@index')->name('student');
