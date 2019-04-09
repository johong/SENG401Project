
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
            <button id="send" class="circle-button" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
        {{-- </form> --}}
        </div>

        <div class="ingredient-list">
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
            <div class="ingredient">
                <p class="ing">Carrot</p>
                <span class="closebtn" onclick="this.parentElement.remove();">&times;</span> 
            </div>
        </div>

    </div>
    {{-- <script src="{{asset('js/search.js')}}"></script> --}}
@endsection

