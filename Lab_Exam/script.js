function addValue(value){

    var display = document.getElementById("display");

    display.value = display.value + value;

}

function calculate(){

    var display = document.getElementById("display");

    var expression = display.value;

    try{
        var result = eval(expression);
        display.value = result;
    }
    catch{
        display.value = "Error";
    }

}

function clearDisplay(){

    document.getElementById("display").value = "";

}