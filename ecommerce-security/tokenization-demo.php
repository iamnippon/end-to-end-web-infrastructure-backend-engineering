<?php

function generatePaymentToken($cardNumber) {
    return hash('sha256', $cardNumber . uniqid());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $cardNumber = $_POST['card'];

    $token = generatePaymentToken($cardNumber);

    echo "Generated Payment Token:<br>";
    echo $token;

    // In real systems:
    // Store token, NOT card number
}
?>

<form method="POST">
    Card Number: <input type="text" name="card" required><br><br>
    <input type="submit" value="Generate Token">
</form>
