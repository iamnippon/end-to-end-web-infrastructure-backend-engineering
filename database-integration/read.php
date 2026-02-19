<?php
require 'config.php';

$result = $conn->query("SELECT * FROM users");

echo "<h2>User List</h2>";

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . 
         " | Name: " . $row['name'] . 
         " | Email: " . $row['email'] . 
         " | Created: " . $row['created_at'] . "<br>";
}
?>
