<?php

namespace App\Http\Controllers;

use App\Recipes;
use Unirest;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($recipeID)
    {
      // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/" . $recipeID . "/information";
      //
      // $responseObject = Unirest\Request::get($url, array(
      //       "X-RapidAPI-Key" => "YOUR API KEY"
      // ));
      //
      // $recipe = $responseObject->body;
      //
      // $recipeInfo['name'] = $recipe->title;
      // $recipeInfo['image'] = $recipe->image;
      // $recipeInfo['id'] = $recipeID;
      // $recipeInfo['readyInMinutes'] = $recipe->readyInMinutes;
      // $recipeInfo['servings'] = $recipe->servings;
      // $recipeInfo['sourceUrl'] = $recipe->spoonacularSourceUrl;
      // // NOTE: instructions can be NULL
      // $recipeInfo['instructions'] = $recipe->instructions;
      // $recipeInfo['vegetarian'] = $recipe->vegetarian;
      // $recipeInfo['vegan'] = $recipe->vegan;
      // $recipeInfo['glutenFree'] = $recipe->glutenFree;
      // $recipeInfo['dairyFree'] = $recipe->dairyFree;
      // $recipeInfo['veryPopular'] = $recipe->veryPopular;
      //
      // $ingredients = [];
      // foreach($recipe->extendedIngredients as $ingredientInfo) {
      //   $nextIngredient['name'] = $ingredientInfo->name;
      //   $nextIngredient['image'] = $ingredientInfo->image;
      //   $nextIngredient['amount'] = $ingredientInfo->original;
      //
      //   array_push($ingredients, $nextIngredient);
      // }
      //
      // $recipeInfo['ingredients'] = $ingredients;


      //FAKE DATA, Comment out everything above to avoid using API calls if you want
      $recipeInfo['name'] = 'Chicken Spinoccoli – Breaded Stuffed Chicken Breast With Spinach, Broccoli and Cheese';
      $recipeInfo['image'] = 'https://spoonacular.com/recipeImages/485365-556x370.jpg';
      $recipeInfo['id'] = $recipeID;
      $recipeInfo['readyInMinutes'] = 90;
      $recipeInfo['servings'] = 4;
      $recipeInfo['sourceUrl'] = 'https://spoonacular.com/chicken-spinoccoli-breaded-stuffed-chicken-breast-with-spinach-broccoli-and-cheese-485365';
      $recipeInfo['vegetarian'] = false;
      $recipeInfo['vegan'] = false;
      $recipeInfo['glutenFree'] = true;
      $recipeInfo['dairyFree'] = true;
      $recipeInfo['veryPopular'] = false;
      $recipeInfo['instructions'] = "Pound the chicken to an even thickness. Season with salt and pepper on both sides. Prep the rest of the ingredients.Heat the butter in a skillet on medium high heat until melted. Add the onion, cook for about 5 minutes, add the garlic and cook for another 30 seconds or so.Add the spinach and white wine. Cook for about a minute until the spinach wilts.You can also use thawed, frozen spinach instead of fresh, but you will only need a small amount, since the spinach is already wilted. Make sure to squeeze out as much liquid as possible from the spinach first, before adding it to the onions.Add the broccoli, season with salt and pepper, cook for about 2 minutes, until the broccoli is slightly softened, but still crunchy. Set aside to cool.Use a rubber spatula or wooden spoon to mix up the cream cheese. It should be really easy to do because the cream cheese needs to be softened.Add the rest of the ingredients. Mix to combine.Spread of the cheese filling on one of the flattened chicken breasts. Spread it out evenly, leaving a border free around the edges. Top with part of the stuffing.Roll up the chicken breast tucking in the sides into the center of the rolled chicken.Roll up the chicken breast tucking in the sides into the center of the rolled chicken.Fill and stuff the rest of the chicken breasts. Roll up the stuffed chicken breasts tightly inside aluminum foil. Refrigerate for at least 1 hour.Preheat the oven to 400 degrees Fahrenheit.Prep the breading station. Place the flour and breadcrumbs into separate plates. Whisk up the eggs and water in another plate.Dredge the chicken in the flour, then in the egg wash and then in the breadcrumbs.Heat up cup oil in a 10 inch skillet on medium high heat, until the oil is hot ans shimmering. Add the chicken to the oil and cook for about 1-2 minutes on all 4 sides, until the chicken is golden brown on all sides.Place the chicken on top of a rack on a rimmed baking sheet. Roast in the oven until the chicken reaches 160 degrees on an instant read thermometer.Let the chicken rest for at least 5 minutes, then slice into pieces.";

      $ingredients = [];

      $nextIngredient['name'] = 'broccoli';
      $nextIngredient['image'] = "broccoli.jpg";
      $nextIngredient['amount'] = "2 cups broccoli, chopped";
      array_push($ingredients, $nextIngredient);

      $nextIngredient['name'] = "butter";
      $nextIngredient['image'] = "butter-sliced.jpg";
      $nextIngredient['amount'] = "1 Tablespoon butter";
      array_push($ingredients, $nextIngredient);

      $nextIngredient['name'] = "cream cheese";
      $nextIngredient['image'] = "cream-cheese.jpg";
      $nextIngredient['amount'] = "4 oz. cream cheese, softened";
      array_push($ingredients, $nextIngredient);

      $nextIngredient['name'] = "eggs";
      $nextIngredient['image'] = "egg.png";
      $nextIngredient['amount'] = "2 eggs, plus 2 Tablespoons water";
      array_push($ingredients, $nextIngredient);

      $nextIngredient['name'] = "feta cheese";
      $nextIngredient['image'] = "feta.png";
      $nextIngredient['amount'] = "¼ cup feta cheese, softened";
      array_push($ingredients, $nextIngredient);

      $recipeInfo['ingredients'] = $ingredients;

      $similarRecipes = $this->getSimilarRecipes($recipeID);
      return view('/main/recipe', ['recipe' => $recipeInfo, 'similarRecipes' => $similarRecipes]);
    }

    public function getSimilarRecipes($recipeID)
    {
      // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/" . $recipeID . "/similar";
      //
      // $responseObject = Unirest\Request::get($url, array(
      //   "X-RapidAPI-Key" => "YOUR API KEY"
      // ));
      //
      // $similarRecipes = [];
      // foreach($responseObject->body as $recipe) {
      //   $newRecipe['name'] = $recipe->title;
      //   $newRecipe['image'] = $recipe->image;
      //   $newRecipe['id'] = $recipe->id;
      //   $newRecipe['servings'] = $recipe->servings;
      //   $newRecipe['readyInMinutes'] = $recipe->readyInMinutes;
      //
      //   array_push($similarRecipes, $newRecipe);
      // }

      $similarRecipes = [];

      $newRecipe['name'] = "Sunny's Roasted Rosemary and Thyme Chicken, Carrots and Potatoes";
      $newRecipe['image'] = 'sunnys-roasted-rosemary-and-thyme-chicken-carrots-and-potatoes-772969.jpeg';
      $newRecipe['id'] = 772969;
      $newRecipe['servings'] = 6;
      $newRecipe['readyInMinutes'] = 60;
      array_push($similarRecipes, $newRecipe);

      $newRecipe['name'] = "Maple and Thyme Roasted Chicken Thighs with Sweet Potatoes";
      $newRecipe['image'] = 'Maple-and-Thyme-Roasted-Chicken-Thighs-with-Sweet-Potatoes-530042.jpg';
      $newRecipe['id'] = 530042;
      $newRecipe['servings'] = 3;
      $newRecipe['readyInMinutes'] = 45;
      array_push($similarRecipes, $newRecipe);

      $newRecipe['name'] = "Sunny's Roasted Rosemary and Thyme Chicken, Carrots and Potatoes";
      $newRecipe['image'] = 'sunnys-roasted-rosemary-and-thyme-chicken-carrots-and-potatoes-772969.jpeg';
      $newRecipe['id'] = 772969;
      $newRecipe['servings'] = 6;
      $newRecipe['readyInMinutes'] = 60;
      array_push($similarRecipes, $newRecipe);

      $newRecipe['name'] = "Maple and Thyme Roasted Chicken Thighs with Sweet Potatoes";
      $newRecipe['image'] = 'Maple-and-Thyme-Roasted-Chicken-Thighs-with-Sweet-Potatoes-530042.jpg';
      $newRecipe['id'] = 530042;
      $newRecipe['servings'] = 3;
      $newRecipe['readyInMinutes'] = 45;
      array_push($similarRecipes, $newRecipe);

      return($similarRecipes);
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
        // $name = $request->all()['name'];
        // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?query=" . $name;
        
        // // Add optional parameters
        // // Max number of recipes to get
        // $url = $url . "&number=2";
        // // Number of results to skip?
        // $url = $url . "&offset=0";
        
        // $responseObject = Unirest\Request::get($url, array(
        //       "X-RapidAPI-Key" => "a09ae75070mshe42e561d2a748d2p1297d5jsn3ab89027f42a"
        // ));

        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?diet=vegetarian&excludeIngredients=coconut&intolerances=egg%2C+gluten&number=2&offset=0&type=main+course&query=chicken",
  array(
    "X-RapidAPI-Host" => "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com",
    "X-RapidAPI-Key" => "a09ae75070mshe42e561d2a748d2p1297d5jsn3ab89027f42a"
  )
);
        
        dd($response);

        // $recipeArray = $responseObject->body->results;
        // $recipes['type'] = 'name';
        
        // foreach ($recipeArray as $recipe) {
        //   $newRecipe['name'] = $recipe->title;
        //   $newRecipe['image'] = $recipe->image;
        //   $newRecipe['id'] = $recipe->id;
        //   $newRecipe['readyInMinutes'] = $recipe->readyInMinutes;
        //   $newRecipe['servings'] = $recipe->servings;
        
        //   array_push($recipes, $newRecipe);
        // }


        //FAKE DATA, Comment out everything above to avoid using API calls if you want
        // $recipes['type'] = 'name';
        // $recipe['name'] = 'ILIKEASS Spinoccoli – Breaded Stuffed Chicken Breast With Spinach, Broccoli and Cheese';
        // $recipe['image'] = 'https://spoonacular.com/recipeImages/484157-312x231.jpg';
        // $recipe['readyInMinutes'] = 65;
        // $recipe['servings'] = 4;
        // $recipe['id'] = 485365;
        // array_push($recipes, $recipe);

        // $recipe['name'] = 'Jerk Chicken (Grilled Spicy Marinated Chicken)';
        // $recipe['image'] = 'https://spoonacular.com/recipeImages/484157-312x231.jpg';
        // $recipe['readyInMinutes'] = 45;
        // $recipe['servings'] = 10;
        // $recipe['id'] = 762877;
        // array_push($recipes, $recipe);

        return view('main/results', ['recipes'=>$recipes]);
    }

    public function searchByIngredients()
    {
      // $ingredientsList = request()->request;
      // $url = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?ingredients=";
      //
      // // API needs ingredients separated by '%2C' rather than commas.
      // foreach($ingredientsList as $ingredient) {
      //   // Only way I could find to avoid _token in request
      //   if (!(strlen($ingredient) > 30)) {
      //     $url = $url . $ingredient . '%2C';
      //   }
      // }
      //
      // // Remove extra %2C at end of string
      // $url = substr($url, 0, -3);
      //
      // // Add optional parameters
      // // Max number of recipes to get
      // $url = $url . "&number=2";
      // // 1 = maximize used ingredients, 2 = minimize missing ingredients
      // $url = $url . "&ranking=1";
      // // Ignore typical pantry ingredients like water, flour, salt, etc.
      // $url = $url . "&ignorePantry=true";
      //
      // $responseObject = Unirest\Request::get($url, array(
      //   "X-RapidAPI-Key" => "YOUR API KEY"
      // ));
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
