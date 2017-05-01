<?php
session_start();

$username = $_POST["username"];
echo "<script>alert('Bye');</script>";
//$name=$_POST["username"];
//echo "<script>alert('Bye,".$name!"');</script>";

session_destroy();
//return to index page
header('Location: index.html');
exit;
?>