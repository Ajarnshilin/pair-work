<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "pair-work";

$connect = mysqli_connect($server, $user, $password, $dbname);

if (!$connect){
    die ("ERROR: Cannot connect to the database $dbname on server $server
    using usename $user (".mysqli_connect_errno().",".mysqli_connect_error().")");
}

mysqli_query($connect, "SET NAMES utf8");

?>