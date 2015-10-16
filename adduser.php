<?php
    if(!isset($_POST['username'])){
        echo "You are not allow to this page";
        exit();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once 'function.php';
        echo "<title>Welcome</title>
            <link rel='stylesheet' type='text/css' href='main.css'>
            <div class='P_quiz'>
            <img src='quiz.jpg' alt='quiz'></div>
            <h1 class='title''>QuizTime(Guest)</h1>";
        echo " <a href='index.php' class='button''>Home</a>
            <a href='login.php'class='button'>Log in</a>
            <a href='signup.php'class='button'>Sign up</a><br><br>";
    $result = queryMysql("SELECT * FROM member WHERE username='$username'");
    if ($result->num_rows!=0) {
        $error = "That username already exists<br><br>";
        echo $error;

    }else{
        $profile="Welcome "."$username";
        queryMysql("INSERT INTO member VALUES('$username', '$password','0')");
        queryMysql("INSERT INTO profiles VALUES('$username', '$profile')");
        echo "<h4>Account created</h4>Please Log in.<br><br>";

    }
?>
