<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "login";

$conn = new mysqli($serverName, $username, $password, $databaseName, 3306);

if ($conn->connect_error) {
    die("Connection to database failed!");
};

?>