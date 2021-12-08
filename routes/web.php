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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'App\Http\Controllers\routeController@home')->name('home');
Route::get('/teachers', 'App\Http\Controllers\routeController@teachers')->name('teachers');
Route::get('/curricula', 'App\Http\Controllers\routeController@curricula')->name('curricula');
Route::get('/laboratories', 'App\Http\Controllers\routeController@laboratories')->name('laboratories');
Route::get('/admissions', 'App\Http\Controllers\routeController@admissions')->name('admissions');
Route::get('/students', 'App\Http\Controllers\routeController@students')->name('students');
Route::get('/faq', 'App\Http\Controllers\routeController@faq')->name('faq');


Route::get('/apitest/password_setting/iremasuyo/carricula', 'App\Http\Controllers\routeController@apitest_c');
Route::get('/apitest/password_setting/iremasuyo/teachers', 'App\Http\Controllers\routeController@apitest_t');
Route::get('/apitest/password_setting/iremasuyo/laboratories', 'App\Http\Controllers\routeController@apitest_l');
Route::get('/apitest/password_setting/iremasuyo/fields', 'App\Http\Controllers\routeController@apitest_f');
