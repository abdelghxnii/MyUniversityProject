<?php
$dbServerName = "172.19.0.2";
$dbUserName = "root";
$dbPassword = "abdelghxni";
$dbName = "myuniversitydb";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>