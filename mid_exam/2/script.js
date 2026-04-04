const input = document.getElementById("username");

input.addEventListener("input", makeUppercase);

function makeUppercase() {
    input.value = input.value.toUpperCase();
}