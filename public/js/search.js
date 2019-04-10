const ingredient = document.getElementById('ingredient');
const recipe = document.getElementById('recipe');

ingredient.addEventListener('click', ()=>{
    if(recipe.className=='selected'){
        ingredient.className = "selected";
        document.getElementById('field').placeholder="Search for recipes by ingredients...";
        document.getElementById('search-form').action = "/recipes/byIngredients"
        recipe.className='';
    }
})

recipe.addEventListener('click', ()=>{
    if(ingredient.className=='selected'){
        recipe.className = "selected";
        document.getElementById('field').placeholder="Search for recipes by name...";
        document.getElementById('search-form').action = "/recipes/byName"
        ingredient.className='';
    }
})

document.getElementById('send').addEventListener('click', ()=>{
    if(recipe.className="selected"){
        document.getElementById('search-form').action = "/recipes/byName?name="+document.getElementById('field').value
    }
})

//add ingredient
document.getElementById('field').addEventListener('keyup', (event)=>{
    if(event.keyCode == 13 && ingredient.className=='selected'){
        var ingredientName =  document.getElementById('field').value;
        if(!ingredientName || ingredientName=="")return;

        var list = document.getElementsByClassName('ingredient-list')[0];
        var newNode = document.createElement('div');
        newNode.className = "ingredient";
        var newP = document.createElement('p');
        var field = document.createElement('input');
        field.name = ingredientName;
        field.value = ingredientName;
        field.style = "display:none;"
        newP.innerHTML = ingredientName;
        newP.className = "ing";
        var newSpan = document.createElement('span');
        newSpan.innerHTML = "&times;";
        newSpan.className = "closebtn";
        newSpan.setAttribute('onclick', 'this.parentElement.remove();');
        newNode.appendChild(field);
        newNode.appendChild(newP);
        newNode.appendChild(newSpan);
        list.appendChild(newNode);

        document.getElementById('field').value = "";
    }
})

//search pressed
// $(document).ready(function(){
//     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//         //only append if ingredient type is searched
//     if(ingredient.className == 'selected'){
//         var ingredientsHtml = document.getElementsByClassName('ing');
//         var ingredients = Array();
//         for(var i = 0; i<ingredientsHtml.length; i++){
//             ingredients[i] = ingredientsHtml[i].innerHTML;
//         }
//     }
// }); 

//search pressed
// document.getElementById('send').addEventListener('click', ()=>{
// })

// function searchIngredients(ingredients){
    
// }

// function searchRecipe(recipe){

// }