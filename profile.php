<?php
session_start();
require_once 'function.php';
echo "<!DOCTYPE html>\n<html><head>";
$userstr='Guest';

    $username=$_SESSION['username'];
    $userstr=$username;

echo "<title>Welcome $userstr</title>
       <link rel='stylesheet' type='text/css' href='main.css'>
       <div class='P_quiz'>
       <img src='quiz.jpg' alt='quiz'></div>
       <h1 class='title''>QuizTime($userstr)</h1>";

    echo " <a href='index.php' class='button''>Home</a>
            <a href='login.php'class='button'>Member</a>
            <a href='quiz.html'class='button'>Quiz</a>
            <a href='Unsubscribe.php'class='button'>Unsubscribe</a>
            <a href='profile.php'class='button'>Profile</a>
            <a href='logout.php'class='button'>Log out</a> ";

?>