<?php

use Illuminate\Http\Request;

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

// Register Route
Route::post('/register', 'AuthController@register');

// Login Route
Route::post('/login', 'AuthController@login');

// Protected Routes
Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/events', 'EventsController');
});

