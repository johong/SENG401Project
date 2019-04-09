const ingredient = document.getElementById('ingredient');
const recipe = document.getElementById('recipe');

ingredient.addEventListener('click', ()=>{
    if(recipe.className=='selected'){
        ingredient.className = "selected";
        recipe.className='';
    }
})

recipe.addEventListener('click', ()=>{
    if(ingredient.className=='selected'){
        recipe.className = "selected";
        ingredient.className='';
    }
})

//add ingredient
document.getElementById('field').addEventListener('keyup', (event)=>{
    if(event.keyCode == 13){
        var list = document.getElementsByClassName('ingredient-list')[0];
        var newNode = document.createElement('div');
        newNode.className = "ingredient";
        var newP = document.createElement('p');
        newP.innerHTML = document.getElementById('field').value;
        newP.className = "ing";
        var newSpan = document.createElement('span');
        newSpan.innerHTML = "&times;";
        newSpan.className = "closebtn";
        newSpan.setAttribute('onclick', 'this.parentElement.remove();');
        newNode.appendChild(newP);
        newNode.appendChild(newSpan);
        list.appendChild(newNode);

        document.getElementById('field').value = "";
    }
})

//search pressed
$(document).ready(function(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //only append if ingredient type is searched
    if(ingredient.className == 'selected'){
        var ingredientsHtml = document.getElementsByClassName('ing');
        var ingredients = Array();
        for(var i = 0; i<ingredientsHtml.length; i++){
            ingredients[i] = ingredientsHtml[i].innerHTML;
        }
        
        $("#send").click(function(){
            console.log('search');
            $.ajax({
                /* the route pointing to the post function */
                url: '/recipes/ingredients',
                type: 'GET',
                /* send the csrf-token and the input to the controller */
                data: { _token: CSRF_TOKEN, message:$(".getinfo").val(),
                        ingredients: ingredients
                },
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) { 
                    console.log("success");
                }
            }); 
        });
    }
}); 

//search pressed
// document.getElementById('send').addEventListener('click', ()=>{
// })

// function searchIngredients(ingredients){
    
// }

// function searchRecipe(recipe){

// }