<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once 'function.php';
    $result = queryMysql("SELECT * FROM member WHERE username='$username'");
    echo $result->num_rows;
    if ($result->num_rows!=0) {
        $error = "That username already exists<br><br>";
    }else{
        queryMysql("INSERT INTO member VALUES('$username', '$password','0')");
        die("<h4>Account created</h4>Please Log in.<br><br>");
    }
?>
