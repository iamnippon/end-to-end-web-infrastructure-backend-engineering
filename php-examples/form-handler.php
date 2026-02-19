<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";

} else {
?>

<form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
}
?>
