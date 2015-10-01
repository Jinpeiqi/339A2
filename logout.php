<?php
/**
 * Created by PhpStorm.
 * User: JINPEIQI
 * Date: 2015/10/1
 * Time: 15:33
 */
session_start();
session_destroy();
echo "<SCRIPT LANGUAGE='JavaScript''>";
echo "location.href='index.php'";
echo "</SCRIPT>";
?>