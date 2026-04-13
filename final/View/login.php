<?php 
session_start();

$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$genderError = $_SESSION["genderError"] ?? "";
$ageError = $_SESSION["ageError"] ?? "";
$loginError = $_SESSION["credentialError"] ?? "";

$username = $_SESSION["username"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: dashboard.php");
    exit();
}

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["genderError"]);
unset($_SESSION["ageError"]);
unset($_SESSION["credentialError"]);
?>

<html>
<body>
<form method="post" action="../Controller/loginValidation.php">
<table>

<tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $username;?>"/></td>
    <td style="color:red"><?php echo $usernameError;?></td>
</tr>

<tr>
    <td>Password</td>
    <td><input type="password" name="password"/></td>
    <td style="color:red"><?php echo $passwordError;?></td>
</tr>

<tr>
    <td>Gender</td>
    <td>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
    </td>
    <td style="color:red"><?php echo $genderError;?></td>
</tr>

<tr>
    <td>Age</td>
    <td><input type="text" name="age"/></td>
    <td style="color:red"><?php echo $ageError;?></td>
</tr>

<tr>
    <td></td>
    <td><p style="color:red"><?php echo $loginError;?></p></td>
</tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit"/></td>
</tr>

</table>
</form>
</body>
</html>