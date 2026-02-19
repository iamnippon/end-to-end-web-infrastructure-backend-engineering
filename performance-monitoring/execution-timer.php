<?php

$startTime = microtime(true);

// Simulated workload
for ($i = 0; $i < 1000000; $i++) {
    sqrt($i);
}

$endTime = microtime(true);
$executionTime = $endTime - $startTime;

echo "Execution Time: " . number_format($executionTime, 6) . " seconds";

?>
