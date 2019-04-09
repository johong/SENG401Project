{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Main</title>
</head>
<body> --}}
@extends('layouts.app')
@section('content')
<div class="bg-image" style="background-image:url({{asset('Images/indexBackground.jpg')}})"></div>
    <div class = "center">
        <div class="tab">
            <button id="ingredient" class="selected">Ingredients</button>
            <button id="recipe">Recipes</Button>
        </div>

        <h1>Search for recipe</h1>
        <form action="./results.html">
            <input type="text" placeholder="Search for recipe by ingredients...">
            <button class="circle-button" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
        </form>

        <div class="ingredient-list">
            <div class="ingredient">
                <p>Carrot</p>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
            <div class="ingredient">
                    <p>Carrot</p>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
            <div class="ingredient">
                    <p>Carrot</p>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
            <div class="ingredient">
                    <p>Carrot</p>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
            <div class="ingredient">
                    <p>Carrot</p>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
            <div class="ingredient">
                    <p>Carrot</p>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
        </div>

    </div>
@endsection

{{-- </body>
<script src="{{asset('js/search.js')}}"></script>
</html> --}}