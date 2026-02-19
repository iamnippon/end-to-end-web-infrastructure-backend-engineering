<?php

$targetUrl = "http://localhost/rest-api-demo/users";

$startTime = microtime(true);

$response = file_get_contents($targetUrl);

$endTime = microtime(true);

$responseTime = $endTime - $startTime;

$status = $response ? "UP" : "DOWN";

echo json_encode([
    "status" => $status,
    "response_time_seconds" => number_format($responseTime, 6)
]);
