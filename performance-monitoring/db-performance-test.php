<?php
require '../database-integration/config.php';

$startTime = microtime(true);

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    // Simulated processing
}

$endTime = microtime(true);

echo "Database Query Execution Time: " .
     number_format($endTime - $startTime, 6) . " seconds";

$conn->close();
?>
