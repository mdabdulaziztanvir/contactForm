<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // collect form data
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // set up email
  $to = "your_email@example.com"; // change to your email address
  $subject = "New message from website contact form";
  $body = "Name: $first_name $last_name\n\nEmail: $email\n\nMessage:\n$message";

  // send email
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us. We will be in touch soon.";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }

}
?>
