<?php

$servername = "localhost";
$username = "Danil";
$password = "Danya1123451";
$dbname = "shopes";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}