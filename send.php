<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "kakuchiy034@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Error sending message. Please try again later.";
  }
}
?>
