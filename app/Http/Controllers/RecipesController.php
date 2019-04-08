<?php

namespace App\Http\Controllers;

use App\Recipes;
use Unirest\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($recipeID)
    {
      // Doesn't seem to be a way to search by recipeID. We might need to take part of the name,
      // Search by it and filter by ID?
      return view('/main/recipe', ['recipeID' => $recipeID]);
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

    public function searchByName($name)
    {
        // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?query=" . $name;
        //
        // // Add optional parameters
        // // Max number of recipes to get
        // $url = $url . "&number=5";
        // // Number of results to skip?
        // $url = $url . "&offset=0";
        //
        // $responseObject = Request::get($url, array(
        //       "X-RapidAPI-Key" => "Your Spoonacular API Key"
        // ));
        //
        // $recipeArray = $responseObject->body->results;
        // $recipes['type'] = 'name';
        //
        // foreach ($recipeArray as $recipe) {
        //   $newRecipe['name'] = $recipe->title;
        //   $newRecipe['image'] = $recipe->image;
        //   $newRecipe['id'] = $recipe->id;
        //   $newRecipe['readyInMinutes'] = $recipe->readyInMinutes;
        //   $newRecipe['servings'] = $recipe->servings;
        //
        //   array_push($recipes, $newRecipe);
        // }


        //FAKE DATA, Comment out everything above to avoid using API calls if you want
        $recipes['type'] = 'name';
        $recipe['name'] = 'Chicken Spinoccoli – Breaded Stuffed Chicken Breast With Spinach, Broccoli and Cheese';
        $recipe['image'] = 'chicken-spinoccoli-breaded-stuffed-chicken-breast-with-spinach-broccoli-and-cheese-485365.jpg';
        $recipe['readyInMinutes'] = 65;
        $recipe['servings'] = 4;
        $recipe['id'] = 485365;
        array_push($recipes, $recipe);

        $recipe['name'] = 'Jerk Chicken (Grilled Spicy Marinated Chicken)';
        $recipe['image'] = 'jerk-chicken-grilled-spicy-marinated-chicken-762877.jpg';
        $recipe['readyInMinutes'] = 45;
        $recipe['servings'] = 10;
        $recipe['id'] = 762877;
        array_push($recipes, $recipe);

        return view('main/results', ['recipes'=>$recipes]);
    }

    public function searchByIngredients($ingredients)
    {
      //$ingredients needs updating based on how we plan on sending arguments
      // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?ingredients=";
      //
      // // API needs ingredients separated by '%2C' rather than commas.
      // for($i = 0; $i < sizeof($ingredientsArray); $i++) {
      //   $url = $url . $ingredientsArray[$i];
      //
      //   if(!(($i + 1) == sizeof($ingredientsArray))) {
      //     $url = $url . '%2C';
      //   }
      // }
      //
      // // Add optional parameters
      // // Max number of recipes to get
      // $url = $url . "&number=2";
      // // 1 = maximize used ingredients, 2 = minimize missing ingredients
      // $url = $url . "&ranking=1";
      // // Ignore typical pantry ingredients like water, flour, salt, etc.
      // $url = $url . "&ignorePantry=true";
      //
      // $responseObject = Request::get($url, array(
      //   "X-RapidAPI-Key" => "Your Spoonacular API Key"
      // ));
      // $responseObject = $request->input($url, array("X-RapidAPI-Key" => "7eb1af4721msh8cf968b543c0dadp154b16jsnf4d778c4542d"));
      //
      // $recipeArray = $responseObject->body;
      // $recipes['type'] = 'ingredients';
      //
      // foreach ($recipeArray as $recipe) {
      //   $missedIngredients = [];
      //   foreach ($recipe->missedIngredients as $ingredient) {
      //     array_push($missedIngredients, $ingredient->name);
      //   }
      //
      //   $newRecipe['name'] = $recipe->title;
      //   $newRecipe['image'] = $recipe->image;
      //   $newRecipe['id'] = $recipe->id;
      //   $newRecipe['missedIngredients'] = $missedIngredients;
      //
      //   array_push($recipes, $newRecipe);
      // }

      //FAKE DATA, Comment out everything above to avoid using API calls if you want
      $recipes['type'] = 'ingredients';

      $recipe['name'] = 'Thyme-roasted Chicken with Potatoes';
      $recipe['image'] = 'https://spoonacular.com/recipeImages/484157-312x231.jpg';
      $missedIngredients = ['fresh thyme leaves', 'red potatoes'];
      $recipe['missedIngredients'] = $missedIngredients;
      $recipe['id'] = 484157;
      array_push($recipes, $recipe);

      $recipe['name'] = 'BBQ roast chicken & chunky chips';
      $recipe['image'] = 'https://spoonacular.com/recipeImages/225465-312x231.jpg';
      $missedIngredients = ['paprika', 'baking potatoes'];
      $recipe['missedIngredients'] = $missedIngredients;
      $recipe['id'] = 225465;
      array_push($recipes, $recipe);

      return view('main/results', ['recipes'=>$recipes]);
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
