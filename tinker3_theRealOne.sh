#!/bin/bash
# allows access to Unirest methods
composer require mashape/unirest-php

php artisan tinker

$request = array( \
              'ingredients' => array ('chicken', 'potato')
           );


public function recipesFromIngredients($request){\
  $ingredientsArr = $request['ingredients'];
  $getSite = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?number=5&ranking=1&ignorePantry=false&ingredients=";
  for($i = 0; $i < sizeof($ingredientsArr); $i++){ \
    $getSite = $getSite . $ingredientsArr[$i];
    if(!(($i + 1) == sizeof($ingredientsArr))){
      $getSite = $getSite . '%2C';
    }
  }

  $response = Unirest\Request::get($getSite, \
    array(
        "X-RapidAPI-Key" => "Your Spoonacular API Key"
    )
  );
}
