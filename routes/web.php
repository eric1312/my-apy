<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BookController as BookV1;

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{id}', 'TaskController@show');
Route::post('/tasks', 'TaskController@store');
Route::put('/tasks/{id}', 'TaskController@update');
Route::delete('/tasks/{id}', 'TaskController@destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('v1/books', BookV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');