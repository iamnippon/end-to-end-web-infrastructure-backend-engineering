<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL database.";

$conn->close();

?>
