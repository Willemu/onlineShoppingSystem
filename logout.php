<?php
session_start();

ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

// $BackToMyPage = $_SERVER['HTTP_REFERER'];
// if(isset($BackToMyPage)) {
//     header('Location: '.$BackToMyPage);
// } else {
//     header('Location: index.php'); // default page
// }
   
header('Location: index.php'); // default page
?>
