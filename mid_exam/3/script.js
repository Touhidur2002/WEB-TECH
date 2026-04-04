const ageInput=document.getElementById("age");
const messageInput = document.getElementById("message");

ageInput.addEventListener("input",agecheck);

function agecheck()
{
 let age = Number(ageInput.value);
    if (isNaN(age)) {
        message.innerHTML = "";
        return;
    }

    if (age < 40) {
        message.innerHTML = "To be a part of the community, you need to at least 40";
        message.className = "normal";
    }
    else if (age >= 40 && age <= 50) {
        message.innerHTML = "You are the youngsters of this community";
        message.className = "normal";
    }
    else {
        message.innerHTML = "Top level members of the group";
        message.className = "redText";
    }
}