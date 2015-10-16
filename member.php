<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "You are not allow to this page";
    exit();
}
require_once 'function.php';
echo "<!DOCTYPE html>\n<html><head>";
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
            <a href='logout.php'class='button'>Log out</a><br> ";

    $score=queryMysql("SELECT `username`,`score` FROM `member` ORDER BY `score` DESC");
    if($score->num_rows>0){
        while($row = $score->fetch_assoc()){
            echo $row["username"].": ".$row["score"]."<br>";
        }
    }else{
        echo "0 result";
    }
?>