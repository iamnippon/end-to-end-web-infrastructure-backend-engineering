<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);

    if (!$amount) {
        die("Invalid amount.");
    }

    // Simulated payment gateway interaction
    $transactionId = "TXN" . time();

    echo "<h2>Payment Successful</h2>";
    echo "<p>Transaction ID: $transactionId</p>";
    echo "<p>Amount: $" . number_format($amount, 2) . "</p>";

    // Never store raw card data locally
}
?>

<form method="POST">
    Amount: <input type="number" step="0.01" name="amount" required><br><br>
    <input type="submit" value="Pay Securely">
</form>
