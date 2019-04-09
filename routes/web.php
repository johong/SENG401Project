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
    return view('main/search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userfridge/{user}', 'UserController@show');
Route::get('/userfridge', 'UserController@index');
Route::get('/recipes/name/{recipeName}', 'RecipesController@searchByName');
Route::post('/recipes/ingredients', 'RecipesController@searchByIngredients');
Route::get('/recipes/{id}', 'RecipesController@index');
