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
        <!-- style="background-image:url({{asset('Images/green.jpg')}})"> -->
        <!-- <div class="bg-image" ></div> -->
            <!-- <div class ="sections-list"> 
                <ul >
                    <li>
                        <h1 id="my-fridge">My Fridge</h1>
                    </li>
                    <li>
                        <h1 id="my-recipe">My Recipes</h1>
                    </li>
                </ul>
            </div> -->

            <!-- <h1>Search for recipe</h1> -->
        <!-- <div class = "search-ingredients">{{-- <form action="./results.html"> --}}
            <input id = "field" type="text" placeholder="Search for recipe by ingredients...">
            <button id="send" class="circle-button" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
        {{-- </form> --}}
        </div> -->
            <div class = "section-name-fridge">
                
                        <div class = "search-ingredients-fridge">{{-- <form action="./results.html"> --}}
                        <div class="header-fridge"><h1 id="section">Lucas Longarini's Fridge</h1></div>    
                        
                             <input id = "field-fridge" type="text" placeholder="Search for ingredients...">
                             <button id="send-fridge" class="circle-button-fridge" type="submit"><img src="{{asset('Images/searchIcon.png')}}" alt="Search"></button>
                                {{-- </form> --}}
                        </div>
         
            </div>

            
                <div class = "side-bar"> 
                    <div class = "ingredient-list-fridge">
                        <div class="ingredient-fridge">
                            <p>
                                A
                            </p>
                            <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                            <span class="closebtn-fridge">
                                &times;
                            </span> 
                        </div>
                        <div class="ingredient-fridge">
                            <p>
                                B
                            </p>
                            <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                            <span class="closebtn-fridge">
                                &times;
                            </span> 
                        </div>
                        <div class="ingredient-fridge">
                            <p>
                                C
                            </p>
                            <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                            <span class="closebtn-fridge">
                                &times;
                            </span> 
                        </div>
                    </div>
                </div>

            <div class ="recipes-fridge"> 
                <div class="recipe-list-fridge">
                    <h3>Favourite Recipes</h3>
                </div>
                    <div class="grid-fridge">
                        <div class="recipe-info-fridge">
                            <img src="https://ohsheglows.com/wp-content/uploads/2017/02/10minuteveganpasta-6481.jpg" alt="pasta">
                            <div class="favbtn">
                                <span >
                                    &hearts;
                                </span> 
                            </div>
                            <div class="recipe-title-fridge">
                                <p class="name-fridge">This recipe </p>
                                <p class="prepTime-fridge">Ready in: 69 mins</p>
                                <p class="servings-fridge">Servings: 420</p>
                            </div>
                        </div>
                        <div class="recipe-info-fridge">
                            <img src="https://ohsheglows.com/wp-content/uploads/2017/02/10minuteveganpasta-6481.jpg" alt="pasta">
                            <div class="favbtn">
                                <span >
                                    &hearts;
                                </span> 
                            </div>
                            <div class="recipe-title-fridge">
                                <p class="name-fridge">This recipe </p>
                                <p class="prepTime-fridge">Ready in: 69 mins</p>
                                <p class="servings-fridge">Servings: 420</p>
                            </div>
                        </div>
                        <div class="recipe-info-fridge">
                            <img src="https://ohsheglows.com/wp-content/uploads/2017/02/10minuteveganpasta-6481.jpg" alt="pasta">
                            <div class="favbtn">
                                <span >
                                    &hearts;
                                </span> 
                            </div>
                            <div class="recipe-title-fridge">
                                <p class="name-fridge">This recipe </p>
                                <p class="prepTime-fridge">Ready in: 69 mins</p>
                                <p class="servings-fridge">Servings: 420</p>
                            </div>
                        </div>
                        
                    </div>
            </div>


            </div>

        @endsection

        <!-- <footer>
        <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </footer> -->
</html>