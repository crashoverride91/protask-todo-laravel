<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Middleware
//Route::middleware('auth')->group(function(){

Route::resource('/todo', 'TodoController');  //<---Tutte le rotte in una unica Route resource

Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');

Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');



//});




// Tutte le rotte individuali del progetto 

/* Route::get('/todos', 'TodoController@index')->name('todo.index');

Route::get('/todos/create', 'TodoController@create');

Route::post('/todos/create', 'TodoController@store');

Route::get('/todos/{todo}/edit', 'TodoController@edit');

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todo.delete'); */






/* 
Route::get('/todos/edit', 'TodoController@edit'); */






Route::get('/', function () {
    
    return view('welcome');
});

Route::post('/upload', function(Request $request){

    $request->image->store('images', 'public');
   return 'uplodedddd';

});

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
