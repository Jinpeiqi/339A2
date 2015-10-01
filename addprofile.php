<?php
session_start();
require_once 'function.php';
$username=$_SESSION['username'];
$text=$_POST["textarea"];
queryMysql("UPDATE profiles SET text = '$text' WHERE username = '$username'");
echo "<SCRIPT LANGUAGE='JavaScript'>";
echo "location.href='profile.php'";
echo "</SCRIPT>";
?>