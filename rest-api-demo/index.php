<?php
require 'config.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];
$requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$resource = $requestUri[1] ?? null;
$id = $requestUri[2] ?? null;

if ($resource === "users") {
    require 'users.php';
} else {
    http_response_code(404);
    echo json_encode(["error" => "Endpoint not found"]);
}
?>
