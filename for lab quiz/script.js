
// document.write example
document.write("<h3>This text is printed using document.write()</h3>");

function showData(){

    let fruits = ["Apple","Banana","Mango","Orange"];

    // length
    let total = fruits.length;

    // includes
    let check = fruits.includes("Mango");

    // count (loop দিয়ে)
    let count = 0;

    fruits.forEach(function(item){
        count++;
    });

    document.getElementById("demo").innerHTML =
    "Total fruits: " + total +
    "<br>Mango exists? " + check +
    "<br>Count using loop: " + count;

}