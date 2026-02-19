<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];

    $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $name, $id);

    if ($stmt->execute()) {
        echo "User updated successfully.";
    } else {
        echo "Error updating record.";
    }

    $stmt->close();
}
?>

<form method="POST">
    User ID: <input type="number" name="id" required><br><br>
    New Name: <input type="text" name="name" required><br><br>
    <input type="submit" value="Update User">
</form>
