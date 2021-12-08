<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function(){
    Route::resource('curricula', 'App\Http\Controllers\Api\CurriculumController');
    Route::resource('laboratories', 'App\Http\Controllers\Api\LaboratoryController');
    Route::resource('teachers', 'App\Http\Controllers\Api\TeacherController');
    Route::resource('fields', 'App\Http\Controllers\Api\FieldController');
    Route::resource('faqs', 'App\Http\Controllers\Api\FaqController');
    Route::resource('newses', 'App\Http\Controllers\Api\NewsController');
    route::get('labo_info','App\Http\Controllers\routeController@labo_info');
    route::get('curricula_info','App\Http\Controllers\routeController@curricula_info');
});