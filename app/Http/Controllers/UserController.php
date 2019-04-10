<?php

namespace App\Http\Controllers;

use App\User;
use App\Ingredient;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $ingredients=$user->ingredients()->pluck('ingredients.name')->toArray();
        $recipe_ids=$user->recipes()->pluck('recipes.id')->toArray();
        $recipe_names=$user->recipes()->pluck('recipes.name')->toArray();
        $recipe_images=$user->recipes()->pluck('recipe.image_url')->toArray();
        
        return view ('fridge/userfridge',compact('ingredients','recipe_ids','recipe_names','recipe_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view ('fridge/userfridge');
    }
        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function removeFavIngredient(int $id){

    }

    public function removeFavRecipe(int $id){

    }

    public function addFavIngredient(Request $request){
        $user = Auth::User();
        
        $request->validate([
            'ingredient'=>'required'
        ]);
          $ingredient = new Ingredient([
            'name' => $request->get('ingredient'),
          ]);
          $user->ingredients()->save($ingredient);
            show();
    }

    public function addFavRecipe(Request $request){
        $recipe = new Recipe([

        ]);
    }

}
