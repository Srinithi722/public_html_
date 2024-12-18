<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email and subject
    $to = "help@thebmacademy.com"; // Replace with the email you want to send to
    $subject = "New Course Inquiry from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Course: $course\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
