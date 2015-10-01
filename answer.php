<?php
    session_start();
    $username=$_SESSION['username'];
    require_once 'function.php';
    $total=0;
    if($_POST["Q1"]==3){
        $total++;
    }else{
        echo  "Question 1 wrong";
        echo "</br>";
    }
    if($_POST["Q2"]==4){
        $total++;
    }else{
        echo  "Question 2 wrong";
        echo "</br>";
    }
    if($_POST["Q3"]==2){
        $total++;
    }else{
        echo  "Question 3 wrong";
        echo "</br>";
    }
    if($_POST["Q4"]==3){
        $total++;
    }else{
        echo  "Question 4 wrong";
        echo "</br>";
    }
    if($_POST["Q5"]==3){
        $total++;
    }else{
        echo  "Question 5 wrong";
        echo "</br>";
    }
    if($_POST["Q6"]==2){
        $total++;
    }else{
        echo  "Question 6 wrong";
        echo "</br>";
    }
    if($_POST["Q7"]==4){
        $total++;
    }else{
        echo  "Question 7 wrong";
        echo "</br>";
    }
    if($_POST["Q8"]==2){
        $total++;
    }else{
        echo  "Question 8 wrong";
        echo "</br>";
    }
    echo "Your total score is "."$total"."</br>";
    queryMysql("UPDATE db339.member SET score = $total WHERE member.username = $username");
?>