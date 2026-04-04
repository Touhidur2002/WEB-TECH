// button select করা
const button = document.getElementById("btn");

// click event listener add করা
button.addEventListener("click", changeColor);

// function আলাদা করা
function changeColor() {

    // random color generate করা (0-255 range)
    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);

    // rgb color তৈরি
    let randomColor = "rgb(" + r + "," + g + "," + b + ")";
    // body background change করা
    document.body.style.backgroundColor = randomColor;
}