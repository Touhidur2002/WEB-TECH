<?php 
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"] ?? "";
$age = $_POST["age"] ?? "";

$hasUsernameError = true;
$hasPasswordError = true;
$hasGenderError = true;
$hasAgeError = true;


if(!$username){
    $_SESSION["usernameError"] = "Username is required";
    $hasUsernameError = true;
}else{
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}


if(!$password){
    $_SESSION["passwordError"] = "Password is required";
    $hasPasswordError = true;
}else{
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}


if(!$gender){
    $_SESSION["genderError"] = "Gender is required";
    $hasGenderError = true;
}else{
    unset($_SESSION["genderError"]);
    $hasGenderError = false;
}


if(!$age){
    $_SESSION["ageError"] = "Age is required";
    $hasAgeError = true;
}else{
    unset($_SESSION["ageError"]);
    $hasAgeError = false;
}


if($hasUsernameError || $hasPasswordError || $hasGenderError || $hasAgeError){
    $_SESSION["username"] = $username;
    Header("Location: ../View/login.php");
}
else{
  
    $users = array("touhidur"=>"touhidur", "rakib"=>"rakib");
    $isFound = false;

    foreach($users as $user=>$pass){
        if($username === $user && $password === $pass){
            $isFound = true;

         
            $_SESSION["username"] = $username;
            $_SESSION["gender"] = $gender;
            $_SESSION["age"] = $age;
            $_SESSION["isLoggedIn"] = true;

            Header("Location: ../View/dashboard.php");
        }
    }

    if(!$isFound){
        $_SESSION["credentialError"] = "Your username or password is incorrect!";
        Header("Location: ../View/login.php");
    }
}
?>