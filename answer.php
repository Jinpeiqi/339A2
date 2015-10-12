<?php
    session_start();
   $username=$_SESSION['username'];
    require_once 'function.php';
    $total=0;
    $answer=$_POST["hidden1"];
    $correct_answer=[3,4,2,3,3,2,4];
    //for($i=0;$i<9;$i=$i+2){
       // echo $answer[$i];
        if($_POST["Q1"]== $correct_answer[$answer[0]-1]){
            $total++;
        }else{
            echo  "Question 1 wrong";
            echo  "The correct is choice ".$correct_answer[$answer[0]-1];
            echo "</br>";
        }
        if($_POST["Q2"]==$correct_answer[$answer[2]-1]){
            $total++;
        }else{
            echo  "Question 2 wrong";
            echo  "The correct is choice".$correct_answer[$answer[2]-1];
            echo "</br>";
        }
        if($_POST["Q3"]==$correct_answer[$answer[4]-1]){
            $total++;
        }else{
            echo  "Question 3 wrong";
            echo  "The correct is choice".$correct_answer[$answer[4]-1];
            echo "</br>";
        }
        if($_POST["Q4"]==$correct_answer[$answer[6]-1]){
            $total++;
        }else{
            echo  "Question 4 wrong";
            echo  "The correct is choice".$correct_answer[$answer[6]-1];
            echo "</br>";
        }
        if($_POST["Q5"]==$correct_answer[$answer[8]-1]){
            $total++;
        }else{
            echo  "Question 5 wrong";
            echo  "The correct is choice".$correct_answer[$answer[8]-1];
            echo "</br>";
        }
    //}
//echo $answer[1];
   /* if($_POST["Q1"]==3){
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
    }*/
    echo "Your total score is "."$total"."</br>";
    if($total==5){
        echo "Well done"."</br>";
    }
    if($total==4){
        echo "Good job"."</br>";
    }
    if($total==3){
        echo "Not bad"."</br>";
    }
    if($total<3){
        echo "Need to work hard"."</br>";
    }
    $score=queryMysql("SELECT `score` FROM `member` WHERE username = $username");
    if($total>$score){
    queryMysql("UPDATE member SET score = '$total' WHERE username = '$username'");
    }
    echo "<link rel='stylesheet' type='text/css' href='main.css'>";
    echo "<a href='index.php' class='button''>Home</a>";
?>