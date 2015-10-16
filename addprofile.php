<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "You are not allow to this page";
    exit();
}
require_once 'function.php';
$username=$_SESSION['username'];
$text=$_POST["textarea"];
queryMysql("UPDATE profiles SET text = '$text' WHERE username = '$username'");
echo "<SCRIPT LANGUAGE='JavaScript'>";
echo "location.href='profile.php'";
echo "</SCRIPT>";
?>