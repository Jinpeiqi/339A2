<?php
session_start();
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
    die("Please enter and username and a password");
}
?>