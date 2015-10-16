<?php
session_start();
if(!isset($_POST['username'])){
    echo "You are not allow to this page";
    exit();
}
$username = $_POST['username'];
$password = $_POST['password'];
if ($username&&$password){
    require_once 'function.php';
    $result=queryMysql("SELECT * FROM member WHERE username='$username' and password='$password'");
    if($result->num_rows==0){
        echo 'Username/Password invalid';
    }else{
        $_SESSION['username']=$username;
        echo "<SCRIPT LANGUAGE='JavaScript''>";
        echo "location.href='index.php'";
        echo "</SCRIPT>";
    }
}else{
    echo"Please enter username and password";
    echo "</br>";
    echo "<a href='index.php'><input type='button' value='Home'></a>";
}
?>