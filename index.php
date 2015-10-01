<?php
session_start();
require_once 'function.php';
echo "<!DOCTYPE html>\n<html><head>";
$userstr='Guest';

if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $login=True;
}else{
    $login=False;
}

echo "<title>Welcome $userstr</title>
       <link rel='stylesheet' type='text/css' href='main.css'>
       <div class='P_quiz'>
       <img src='quiz.jpg' alt='quiz'></div>
        <h1 class='title''>QuizTime($userstr)</h1>";


if($login){
    echo " <a href='index.php' class='button''>Home</a>
            <a href='login.php'class='button'>Member</a>
            <a href='quiz.html'class='button'>Quiz</a>
            <a href='Unsubscribe.php'class='button'>Unsubscribe</a>
            <a href='profile.php'class='button'>Profile</a>
            <a href='logout.php'class='button'>Log out</a> ";
}else{
    echo " <a href='index.php' class='button''>Home</a>
            <a href='login.php'class='button'>Log in</a>
            <a href='signup.php'class='button'>Sign up</a>
            <p class='Home_info'>=>You must be logged in to view this page.</p><br>
            <p class='Info'>Where come to QuizTime, please sign up and/or log in to join in.</p>";
}

?>