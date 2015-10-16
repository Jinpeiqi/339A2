<?php
session_start();
require_once 'function.php';
echo "<!DOCTYPE html>\n<html><head>";
$userstr='Guest';

if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $userstr=$username;
    $login=True;
}else{
    $login=False;
}

echo "<title>Welcome $userstr</title>
       <link rel='stylesheet' type='text/css' href='main.css'>
       <div class='P_quiz'>
       <canvas id='mycanvas' width='500' height='250'></canvas></div>
        <script>
            canvas = document.getElementById('mycanvas')
            context = canvas.getContext('2d')
            myimage = new Image()
            myimage.src = 'quiz.jpg'
            myimage.onload = function()
            {
                context.drawImage(myimage,0,0)
            }
        </script>
        <h1 class='title''>QuizTime($userstr)</h1>";


if($login){
    echo " <a href='index.php' class='button''>Home</a>
            <a href='member.php'class='button'>Member</a>
            <a href='quiz.html'class='button'>Quiz</a>
            <a href='Unsubscribe.php'class='button'>Unsubscribe</a>
            <a href='profile.php'class='button'>Profile</a>
            <a href='logout.php'class='button'>Log out</a> ";
}else{
    echo " <a href='quiz2.html' class='button''>Home</a>
            <a href='login.php'class='button'>Log in</a>
            <a href='signup.php'class='button'>Sign up</a>
            <p class='Home_info'>=>You must be logged in to view this page.</p><br>
            <p class='Info'>Where come to QuizTime, please sign up and/or log in to join in.</p>";
}

?>
