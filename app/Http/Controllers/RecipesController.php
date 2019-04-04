<?php

namespace App\Http\Controllers;

use App\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($recipeArray)
    {
        // if ($recipeArray == null)

        // Get just the recipe name, image, and ID.
        $recipes = [];
        foreach ($recipeArray as $recipe) {
          $newRecipe['name'] = $recipe->title;
          $newRecipe['image'] = $recipe->image;
          $newRecipe['id'] = $recipe->id;

          array_push($recipes, $newRecipe);
        }
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
     * @param  \App\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipes)
    {
        //
    }

    public function searchByName(Request $request)
    {
        $search = $request['search'];
        $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?query=" . $search;

        // Add optional parameters
        // Max number of recipes to get
        $url = $url . "&number=5";
        // Number of results to skip?
        $url = $url . "&offset=0";

        $responseObject = Unirest\Request::get($url, array(
              "X-RapidAPI-Key" => "Your Spoonacular API Key"
        ));

        $recipeArray = $responseObject->body;

        return view ('recipes', ['recipes'=>$recipeArray]);
    }

    public function searchByIngredients(Ingredients $ingredients)
    {
      $ingredientsArray = $ingredients['ingredients'];
      $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?ingredients=";

      // API needs ingredients separated by '%2C' rather than commas.
      for($i = 0; $i < sizeof($ingredientsArray); $i++) {
        $url = $url . $ingredientsArray[$i];

        if(!(($i + 1) == sizeof($ingredientsArray))) {
          $url = $url . '%2C';
        }
      }

      // Add optional parameters
      // Max number of recipes to get
      $url = $url . "&number=5";
      // 1 = maximize used ingredients, 2 = minimize missing ingredients
      $url = $url . "&ranking=1";
      // Ignore typical pantry ingredients like water, flour, salt, etc.
      $url = $url . "&ignorePantry=true";

      $responseObject = Unirest\Request::get($url, array(
        "X-RapidAPI-Key" => "Your Spoonacular API Key"
      ));

      $recipeArray = $responseObject->body;

      return view ('recipes', ['recipes'=>$recipeArray]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipes $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipes $recipes)
    {
        //
    }
}
