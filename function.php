<?php
/**
 * Created by PhpStorm.
 * User: JINPEIQI
 * Date: 2015/9/28
 * Time: 21:02
 */
$dbhost = 'localhost';
$dbname = 'db339';
$dbuser = 'a2user';
$dbpass = 'a2399';

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error){
    die($connection->connect_error);
}
