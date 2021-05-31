<?php
/****************************
    DATABASE CONNECTION
****************************/

// Connection info
$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'hotel';

// Open connection
$conn = new mysqli($host, $username, $password, $db_name);
//var_dump($conn);

// Check connection
if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connection_error");
}