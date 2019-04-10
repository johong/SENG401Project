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
use App\User;

Route::get('/', function () {
    $check = Auth::user();
    $hasUser = false;
    if(isset($check)){
        $check = true;
    }

    return view('main/search', ['user'=>$hasUser]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userfridge', 'UserController@index');
Route::get('/userfridge/{user}', 'UserController@show');

Route::post('/recipes/byName', 'RecipesController@searchByName');
Route::post('/recipes/byIngredients', 'RecipesController@searchByIngredients');
Route::get('/recipes/{id}', 'RecipesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
