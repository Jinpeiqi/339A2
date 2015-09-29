<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password){
    require_once 'function.php';
     $result=queryMysql("SELECT * FROM member WHERE username='$username' and password='$password'");
        if($result->num_rows==0){
            echo 'Username/Password invalid';
        }
    }else{
    die("Please enter and username and a password");
}
?>