<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/recipe.css')}}">
    <title>Recipe</title>
</head>
<body>
    <div class="top">
        <div class="img">
            <img src="{{$recipe['image']}}" alt="{{$recipe['image']}}">
        </div>
        <div class = "info">
            <h2>{{$recipe['name']}}</h2>
            <p>Ready In: {{$recipe['readyInMinutes']}} mins</p>
            <p>Servings: {{$recipe['servings']}}</p>
            <a href="{{$recipe['sourceUrl']}}">{{$recipe['sourceUrl']}}</a>
            <div class="tags">
                @if($recipe['vegetarian'])
                    <div class="tag">Vegetarian</div>
                @endif

                @if($recipe['vegan'])
                    <div class="tag">Vegan</div>
                @endif

                @if($recipe['glutenFree'])
                    <div class="tag">Gluten Free</div>
                @endif

                @if($recipe['dairyFree'])
                    <div class="tag">Dairy Free</div>
                @endif

                @if($recipe['veryPopular'])
                    <div class="tag">Popular</div>
                @endif
            </div>

        {{-- IF logged in user doenst have it saved --}}
        @if($user==true)
            @if($fav==true)
                <form method="POST" action="/userfridge/deleteFavRecipe/">
                    {{ csrf_field() }}
                    <button class = "remove" type="submit" id="fav">Remove from favorites</button>
                    <input type="hidden" name="id" value="{{$recipe['id']}}">
                </form>
            @else
                <form method="POST" action="/userfridge/addFavRecipe/">
                    {{ csrf_field() }}
                    <button class = "add" type="submit" id="fav">Add to favorites</button>
                    <input type="hidden" name="id" value="{{$recipe['id']}}">
                    <input type="hidden" name="name" value="{{$recipe['name']}}">
                    <input type="hidden" name="image" value="{{$recipe['image']}}">
                </form>
            @endif
        @endif

        </div>
    </div>

    <div class="ingredient-container">
        <h1>Ingredients</h1>
        <div class="ingredients">

            @foreach($recipe['ingredients'] as $ingredient)
                <div class="ingredient">
                    <div class="img-container">
                        <img src="https://spoonacular.com/cdn/ingredients_500x500/{{$ingredient['image']}}" alt="https://spoonacular.com/cdn/ingredients_500x500/{{$ingredient['image']}}"/>
                    </div>
                    <div class="ingredient-details">
                        <h6>{{$ingredient['name']}}</h6>
                        <p>Amount: {{$ingredient['amount']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="fml" class = "instructions">
        <h1>Instructions</h1>
        <p id="inst">{{$recipe['instructions']}}</p>
    </div>

    <div class="ingredient-container">
        <h1>Similar</h1>
        <div class="ingredients">
            @foreach($similarRecipes as $similarRecipe)
                <div style = "cursor: pointer;" class="ingredient" onclick="window.open('../recipes/{{$similarRecipe['id']}}','_self');">
                    <div class="img-container">
                        <img src="https://spoonacular.com/recipeImages/{{$similarRecipe['image']}}" alt="{{$similarRecipe['image']}}"/>
                    </div>
                    <div class="ingredient-details">
                        <h6 title="{{$similarRecipe['name']}}">{{$similarRecipe['name']}}</h6>
                        <p>Ready In: {{$similarRecipe['readyInMinutes']}} mins</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
<script src="{{asset('js/recipe.js')}}"></script>
</html>
