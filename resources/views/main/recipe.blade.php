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
                <div class="tag">Popular</div>
                <div class="tag">Gluten free</div>
                <div class="tag">Low fat</div>
            </div>
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

    <div class = "instructions">
        <h1>Instructions</h1>
        <p>{{$recipe['instructions']}}</p>
    </div>

    <div class="ingredient-container">
        <h1>Similar</h1>
        <div class="ingredients">

            @foreach($similarRecipes as $similarRecipe)
                <div class="ingredient">
                    <div class="img-container">
                        <img src="https://spoonacular.com/recipeImages/{{$similarRecipe['image']}}" alt="{{$similarRecipe['image']}}"/>
                    </div>
                    <div class="ingredient-details">
                        <h6 title="{{$similarRecipe['name']}}">{{$similarRecipe['name']}}</h6>
                        <p>Servings: {{$similarRecipe['servings']}}<br/>Ready In: {{$similarRecipe['readyInMinutes']}} mins</p>
                    </div>
                </div>
            @endforeach

            <div class="ingredient">
                <div class="img-container">
                    <img src="https://static.euronews.com/articles/3327954/1280x720_3327954.jpg" alt=""  />
                </div>
                <div class="ingredient-details">
                    <h6>Peppers</h6>
                    <p>serving</p>
                </div>
            </div>

            <div class="ingredient">
                <div class="img-container">
                    <img src="https://static.euronews.com/articles/3327954/1280x720_3327954.jpg" alt=""  />
                </div>
                <div class="ingredient-details">
                    <h6>Peppers</h6>
                    <p>serving</p>
                </div>
            </div>

            <div class="ingredient">
                <div class="img-container">
                    <img src="https://static.euronews.com/articles/3327954/1280x720_3327954.jpg" alt=""  />
                </div>
                <div class="ingredient-details">
                    <h6>Peppers</h6>
                    <p>serving</p>
                </div>
            </div>

            <div class="ingredient">
                <div class="img-container">
                    <img src="https://static.euronews.com/articles/3327954/1280x720_3327954.jpg" alt=""  />
                </div>
                <div class="ingredient-details">
                    <h6>Peppers</h6>
                    <p>serving</p>
                </div>
            </div>

            <div class="ingredient">
                <div class="img-container">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-1.jpg" alt=""  />
                </div>
                <div class="ingredient-details">
                    <h6>Peppers</h6>
                    <p>serving</p>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
