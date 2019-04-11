<?php

namespace App\Http\Controllers;

use App\User;
use App\Ingredient;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;
use Illuminate\Support\Facades\DB;

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
        $ingredients=$user->ingredients()->get();//pluck('ingredients.name')->toArray();
        $recipes=$user->recipes()->get();
        // $recipe_names=$user->recipes()->pluck('recipes.name')->toArray();
        // $recipe_images=$user->recipes()->pluck('recipes.image_url')->toArray();

        return view ('fridge/userfridge',compact('ingredients','recipes'));//,'recipe_names','recipe_images'));
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

    public function removeFavIngredient(String $id){
        $ingredientId = (int)$id;
        // dd($id);
        DB::table('ingredient_user')->where('ingredient_id', '=', $ingredientId)->where('user_id', '=', Auth::User()->id)->delete();
        return redirect()->action('UserController@index');
    }

    public function removeFavRecipeFridge(String $id){
        $recipeId = (int)$id;
        // dd($id);
        DB::table('recipe_user')->where('recipe_id', '=', $recipeId)->where('user_id', '=', Auth::User()->id)->delete();
        return redirect()->action('UserController@index');
    }

    public function removeFavRecipe(Request $request){
        $recipeId = $request->get('id');
        DB::table('recipe_user')->where('recipe_id', '=', $recipeId)->where('user_id', '=', Auth::User()->id)->delete();
        return redirect()->back();
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
          return redirect()->action('UserController@index');
    }

    public function addFavRecipe(Request $request){
        $user = Auth::User();

        $recipe = new Recipe([
            'id'=>$request->get('id'),
            'name' => $request->get('name'),
            'image_url'=>$request->get('image')
        ]);

        $user->recipes()->save($recipe);
        return redirect()->back();
    }

}
