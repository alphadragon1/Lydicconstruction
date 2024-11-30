<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = "willhuerta@hotmail.com"; // Replace with your email address
  $subject = "Contact Form Submission";
  $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $messageBody, $headers)) {
    echo "Thank you for your message. We will contact you soon.";
  } else {
    echo "Error sending email.";
  }
}
?>