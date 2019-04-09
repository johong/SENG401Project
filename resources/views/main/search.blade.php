<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Main</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
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

</body>
<script src="{{asset('js/search.js')}}"></script>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(".postbutton").click(function(){
            $.ajax({
                /* the route pointing to the post function */
                url: '/postajax',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: CSRF_TOKEN, message:$(".getinfo").val()},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) { 
                    $(".writeinfo").append(data.msg); 
                }
            }); 
        });
    });    
</script>