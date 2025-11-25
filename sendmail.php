<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your email
    $to = "chaitanyabarge340@gmail.com";  

    $subject = "New Contact Form Submission";

    // Collect form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Build email body
    $body  = "You have a new message from your website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank-you page
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
