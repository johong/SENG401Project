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