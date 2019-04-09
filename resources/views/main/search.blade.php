
@extends('layouts.app')
@section('content')
<div class="bg-image" style="background-image:url({{asset('Images/indexBackground.jpg')}})"></div>
    <div class = "center">
        <div class="tab">
            <button id="ingredient" class="selected">Ingredients</button>
            <button id="recipe">Recipes</Button>
        </div>

        

            <h1>Search for recipe</h1>
            <div class = "form">{{-- <form action="./results.html"> --}}
                <input id = "field" type="text" placeholder="Search for recipe by ingredients...">
                <form method="POST" action="/recipes/ingredients">
                    {{ csrf_field() }}
                    <button id="send" class="circle-button" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
                
                <div class="ingredient-list">
                    {{-- <div class="ingredient">
                        <input name="carrot" style="display:none;" value="carrot">
                        <p class="ing">Carrot</p>
                        <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
                    </div> --}}
                <div>
                    
            </form>
        </div>


    </div>
@endsection

