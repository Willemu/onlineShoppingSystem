<?php
//echo "rerere";
$servername = "localhost";
$username = "root";
$password = "Winter01@";
$db = "ecommerce";
// create connection
$con = mysqli_connect($servername, $username, $password,$db);
// check connection
if (!$con) {
    die("connection failed: " . mysqli_connect_error());
}


?>
