#!/bin/bash
# allows access to Unirest methods
# if needed: composer require mashape/unirest-php

php artisan tinker

$request1 = array( \
              'ingredients' => array ('chicken', 'potato')
           );


public function recipesFromIngredients($request){\
  $ingredientsArr = $request['ingredients'];
  $getSite = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?number=5&ranking=1&ignorePantry=false&ingredients=";
  for($i = 0; $i < sizeof($ingredientsArr); $i++){
    $getSite = $getSite . $ingredientsArr[$i];
    if(!(($i + 1) == sizeof($ingredientsArr))){
      $getSite = $getSite . '%2C';
    }
  }
  $response = Unirest\Request::get($getSite,
    array(
        "X-RapidAPI-Key" => "Your Spoonacular API Key"
    )
  );
  echo $response;
}

recipesFromIngredients($request1);




$request2 = array( \
              'search' => 'pasta'
           );

public function recipesFromSearch($request){
  $search = $request['search'];
  $getSite = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?number=5&offset=0&query=" . $search;
  $response = Unirest\Request::get($getSite,
    array(
        "X-RapidAPI-Key" => "4c5a9040a7msh029bae4a514b8b0p1ce6fcjsndd776ae0d2f8"
    )
  );
  echo $response;
}

recipesFromSearch($request2);
