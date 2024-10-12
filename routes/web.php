<?php

use App\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'AboutController@index');
Route::get('todos', 'TodosController@index');
Route::get('todos/{todoId}', 'TodosController@show');
Route::get('new-todo', 'TodosController@create');
Route::post('store-todo', 'TodosController@store');
Route::get('todos/{todoId}/edit','TodosController@edit');
Route::post('todos/{todoId}/update','TodosController@update');
Route::get('todos/{todoId}/delete','TodosController@destroy');
Route::get('todos/{todoId}/complete','TodosController@complete');

Route::get('completed',function(){
    return view('completed')->with('todos',Todo::all());
});
