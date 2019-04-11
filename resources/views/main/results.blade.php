<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/results.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Results</title>
</head>
<body> -->
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/results.css')}}">
<br><br>
    <div class = "container">
        <h1>Results</h1>
        <div class="grid">
            @if($recipes['type'] == 'name')
                @foreach($recipes as $recipe)
                    @if($recipe == 'name')
                        @continue
                    @endif
                    <div style="cursor: pointer;" class="recipe" onclick="window.open('../recipes/{{$recipe['id']}}','_self');">
                        <img src="https://spoonacular.com/recipeImages/{{$recipe['image']}}" alt="{{$recipe['image']}}">
                        <div class = "recipe-title">
                            <p class="name" title="{{$recipe['name']}}">{{$recipe['name']}}</p>
                            <p class="prepTime">Ready In: {{$recipe['readyInMinutes']}}mins</p>
                            {{-- <p class="servings">Servings: {{$recipe['servings']}}</p> --}}
                        </div>
                    </div>
                @endforeach

            @else
                @foreach($recipes as $recipe)
                    @if($recipe == 'ingredients')
                        @continue
                    @endif
                    <div class="recipe" onclick="window.open('../recipes/{{$recipe['id']}}','_self');">
                        <img src="{{$recipe['image']}}" alt="{{$recipe['image']}}">
                        <div class = "recipe-title">
                            <p class="name" title="{{$recipe['name']}}">{{$recipe['name']}}</p>
                            <p class="missedIngredients" title="{{$recipe['missedIngredients']}}">Missed Ingredients:
                              {{$recipe['missedIngredients']}}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    @endsection
<!-- </body>
</html> -->
