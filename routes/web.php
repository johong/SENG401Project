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
        $hasUser = true;
    }

    return view('main/search', ['user'=>$hasUser]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('pages/mainpage', ['middleware' => 'auth', 'uses' => 'FooController@index']);
Route::group(['middleware' => 'auth'], function() {
    Route::get('/userfridge', 'UserController@index');
    Route::get('/userfridge/deleteFavIngredient/{id}', 'UserController@removeFavIngredient');
    Route::get('/userfridge/deleteFavRecipeFridge/{id}', 'UserController@removeFavRecipeFridge');
    Route::post('/userfridge/deleteFavRecipe/', 'UserController@removeFavRecipe');
    Route::post('/userfridge/addFavIngredient/', 'UserController@addFavIngredient');
    Route::post('/userfridge/addFavRecipe/', 'UserController@addFavRecipe');
});

Route::post('/recipes/byName', 'RecipesController@searchByName');
Route::post('/recipes/byIngredients', 'RecipesController@searchByIngredients');
Route::get('/recipes/{id}', 'RecipesController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
