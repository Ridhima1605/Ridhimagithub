<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can now use these variables to send an email, save to a database, etc.
    // For simplicity, let's just display a thank you message.

    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have received your message and will get back to you at $email soon.</p>";
}
?>
