<?php
session_start();
$username=$_SESSION['username'];
require_once 'function.php';
queryMysql("DELETE FROM db339.member WHERE member.username='$username'");
queryMysql("DELETE FROM db339.profiles WHERE profiles.username='$username'");
session_destroy();
echo "<SCRIPT LANGUAGE='JavaScript''>";
echo "location.href='index.php'";
echo "</SCRIPT>";
?>