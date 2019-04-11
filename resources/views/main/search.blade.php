
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/search.css')}}">
<div class="bg-image" style="background-image:url({{asset('Images/indexBackground.jpg')}})"></div>
    <div class = "center">
        <div class="tab">
            <button id="ingredient" class="selected">Ingredients</button>
            <button id="recipe">Recipes</Button>
        </div>



            <h1>Search for recipe</h1>
            <div class = "form">
                <input id = "field" spellcheck = "true" type="text" placeholder="Search for recipes by ingredients...">
                <form id="search-form" method="POST" action="/recipes/byIngredients">
                    {{ csrf_field() }}
                    @if($user==true)
                        <div id="ffs"><input id="fridge" type="checkbox" name="fridge" value="fridge"><p>Include my fridge</p></div>
                    @endif
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
