<?php

$to = "usmanmalik8058@gmail.com; // replace with your email address
$subject = "New form submission";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

mail($to, $subject, $body, $headers);

header("Location: thank-you.html"); // redirect to thankyou page

?>
