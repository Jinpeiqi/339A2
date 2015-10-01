<?php
/**
 * Created by PhpStorm.
 * User: JINPEIQI
 * Date: 2015/10/1
 * Time: 17:03
 */
session_start();
require_once 'function.php';
echo "<!DOCTYPE html>\n<html><head>";
$userstr='(Guest)';

if($_SESSION['username']){
    $username=$_SESSION['username'];
    $login=True;
}else{
    $login=False;
}

echo "<title>Welcome $userstr</title>
       <link rel='stylesheet' type='text/css' href='main.css'>
       <div class='P_quiz'>
       <img src='quiz.jpg' alt='quiz'>";

if($login){
    
}

?>