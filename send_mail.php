<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "emirkzlcm0@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"] ?? "New Contact Form Submission";
    $message = $_POST["message"];

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank-you.html"); // Redirect to a thank-you page
    } else {
        echo "Error: Email not sent.";
    }
}
?>