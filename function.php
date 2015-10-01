<?php

$dbhost = 'localhost';
$dbname = 'db339';
$dbuser = 'a2user';
$dbpass = 'a2399';

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);
/*echo  "We are connected to the database $dbname!<br>";*/

function createTable($name,$query){
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}
function queryMysql($query){
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
}
?>