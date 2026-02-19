<?php

$students = [
    ["name" => "Nippon", "role" => "Backend Developer"],
    ["name" => "Alex", "role" => "Frontend Developer"],
    ["name" => "Sara", "role" => "Database Engineer"]
];

echo "<h2>Team Members</h2>";

foreach ($students as $member) {
    echo "<p>Name: {$member['name']} - Role: {$member['role']}</p>";
}

?>
