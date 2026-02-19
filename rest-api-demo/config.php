<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "backend_project";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

header("Content-Type: application/json");

?>
