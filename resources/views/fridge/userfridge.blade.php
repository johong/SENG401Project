<!DOCTYPE html>
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
        <body>

            <div class ="sections-list"> 
                <ul >
                    <li>
                        <h1 id="my-fridge">My Fridge</h1>
                    </li>
                    <li>
                        <h1 id="my-recipe">My Recipes</h1>
                    </li>
                </ul>
            </div>

            <div class = "section-name">
                <ul >
                    <li>
                        <h1 id="section">My Fridge</h1>
                    </li>
                </ul>
            </div>

            <div class = "side-bar"> 
            <div class = "ingredient-list">
                <div class="ingredient">
                    <p>
                        A
                    </p>
                    <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                    <span class="closebtn">
                        &hearts;
                    </span> 
                </div>
                <div class="ingredient">
                    <p>
                        B
                    </p>
                    <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                    <span class="closebtn">
                        &hearts;
                    </span> 
                </div>
                <div class="ingredient">
                    <p>
                        C
                    </p>
                    <!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
                    <span class="closebtn">
                        &hearts;
                    </span> 
                </div>
            </div>
            </div>

            <div class = "recipes"> 
                <div class="recipe-list">

                </div>
            </div>



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
            

        </body>
</html>