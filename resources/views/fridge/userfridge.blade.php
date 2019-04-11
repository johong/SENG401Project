<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/fridge.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="main.js"></script>
    </head>
        <body >  -->
        @extends('layouts.app')
@section('content')

        <div class= "side-bar-container-fridge">
                <div class = "section-name-fridge">
                        <div class = "search-ingredients-fridge">
                            <form class = "search-ingredients-fridge" method="POST" action="/userfridge/addFavIngredient">
                            {{ csrf_field() }}
                            <div class="header-fridge"><h1 id="section">My Fridge</h1></div>    
                             <input id = "field-fridge" name="ingredient" type="text" placeholder="Add Ingredients to your fridge...">
                             <button id="send-fridge" class="circle-button-fridge" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
                            </form>
                        </div>
                </div>
            
                <div class = "side-bar"> 
                    <div class = "ingredient-list-fridge">
                        @if(count($ingredients))
                        @foreach ($ingredients as $ingredient)
                        <div class="ingredient-fridge">
                            <p>
                                {{ $ingredient->name}}
                            </p>
                            <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                            <span class="closebtn-fridge">
                                <a class="closebtn-fridge" href="/userfridge/deleteFavIngredient/{{$ingredient->id}}">&times;</a>
                            </span> 
                        </div>
                        @endforeach
                        @else
                        <div>
                            <p>
                                No Favourite Ingredients yet :(
                            </p>
                            <p>
                                Add Some!
                            </p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class ="recipes-fridge"> 
                    <div class="recipe-list-fridge">
                        <h3>Favourite Recipes</h3>
                    </div>
                    <div class="grid-fridge">

                    @if(count($recipes))
                        @foreach ($recipes as $recipe)
                        <div class="recipe-info-fridge" onclick="window.open('../recipes/{{$recipe->id}}','_self');">
                            <img src="{{ $recipe->image_url}}" alt="pasta">
                            <div class="favbtn">
                                <span >
                                <a class="favbtn" href="/userfridge/deleteFavRecipeFridge/{{$recipe->id}}">&hearts;</a>
                                </span> 
                            </div>
                            <div class="recipe-title-fridge">
                                <p class="name-fridge">{{$recipe->name}} </p>
                                <p class="prepTime-fridge">{{$recipe->id}}</p>
                                <p class="servings-fridge">Servings: 420</p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div>
                            <p>No Favourite Recipes yet :(</p>
                            <p>Add Some!</p>
                        </div>
                    @endif
                    </div>
                </div>
        </div>

        @endsection
</html>