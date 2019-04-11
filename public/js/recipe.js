convertSteps();

function convertSteps(){
    var instructions = document.getElementById('inst');
    var text = instructions.innerHTML;
    var testArray = text.split(".");
    var newList = document.createElement('ol');

    for(var i = 0; i<testArray.length; i++){
        if(testArray[i]=="")continue;

        var newPoint = document.createElement('li');
        newPoint.className = "list"
        newPoint.innerHTML = testArray[i];
        newList.appendChild(newPoint);
    }

    instructions.remove();

    document.getElementById("fml").appendChild(newList);
}