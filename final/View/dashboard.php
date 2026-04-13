<?php 
session_start();

$username = $_SESSION["username"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}
?>

<html>
<body>
<h1>Welcome <?php echo $username;?></h1>
<p>Gender: <?php echo $_SESSION["gender"];?></p>
<p>Age: <?php echo $_SESSION["age"];?></p>

<a href="../Controller/logout.php">Logout</a>
</body>
</html>