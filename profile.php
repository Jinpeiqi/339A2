<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "You are not allow to this page";
    exit();
}
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

    echo " <a href='index.php' class='button'>Home</a>
            <a href='member.php'class='button'>Member</a>
            <a href='quiz.html'class='button'>Quiz</a>
            <a href='Unsubscribe.php'class='button'>Unsubscribe</a>
            <a href='profile.php'class='button'>Profile</a>
            <a href='logout.php'class='button'>Log out</a> <br><br><br>";
            $profile=queryMysql("SELECT text FROM profiles WHERE username='$username'");
    echo $profile->fetch_assoc()['text']."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
    echo " <a href='editprofile.php' class='button'>Editprofile</a>
            <a href='showmyscore.php' class='button'>Score</a> "

?>