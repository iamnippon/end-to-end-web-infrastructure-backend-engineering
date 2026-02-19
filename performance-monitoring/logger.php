<?php

$data = json_decode(file_get_contents("php://input"), true);

$logEntry = date("Y-m-d H:i:s") . 
            " | Page Load Time: " . 
            $data['page_load_time_ms'] . " ms\n";

file_put_contents("performance.log", $logEntry, FILE_APPEND);

echo json_encode(["status" => "logged"]);

?>
