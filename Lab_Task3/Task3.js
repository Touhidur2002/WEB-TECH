let wrongCount = 0;

function validateForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    document.getElementById("emailErr").innerHTML ="";
document.getElementById("PassErr").innerHTML = "";

    if(!email.includes("@")) {
        document.getElementById("emailErr").innerHTML =
        "email must contain @";
        wrongCount++;
    }
    else if(!password.includes("#")) {
        document.getElementById("passErr").innerHTML =
        "password must contain #";
        wrongCount++;
    }
    else {
        document.getElementById("count").innerHTML =
        "Login successful";
        return false;
    }
    document.getElementById("count").innerHTML =
    "wrong attemps:" + wrongCount;
    return false;
}