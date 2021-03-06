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

Route::get('/', function () {
    return view('welcome');
});

route::get('/home',function(){
    return view('home');
});
Route::get('/new',[
    'uses' => 'PagesController@new'
]);
Route::get('/todos',[
    'uses' => 'TodosController@index'
]);

Route::post('/create/todo',[
    'uses' => 'TodosController@store'
]);

Auth::routes();

Route::get('/logout', function(){
   Auth::logout();
   return view('welcome');
});
