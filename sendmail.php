<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    $to = "tlundean@gmail.com"; // where the contact form sends to
    $subject = "Pig Dice Support Request";
    $message = "Email from: $email\n\nQuestion:\n$question";
    $headers = "From: noreply@piggame.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Message failed to send.";
    }
}
?>
