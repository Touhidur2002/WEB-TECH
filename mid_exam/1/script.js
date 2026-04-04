function validationform(){
    const fname = document.forms["myform"]["fname"].value;
    const lname =document.forms["myform"]["lname"].value;
    const age=document.forms["myform"]["age"].value;
    if(fname === ""|| lname === "")
    {
        alert("both fields must not e mpty");
        return false;
    }
    if(fname.length<2 || lname.length <2) {
        alert("each fild must have 2 chjaegwjkn");
        return false;
    }
    return true;
}