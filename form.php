<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "cristianvillarreal38@gmail.com";
$subject = "New Message"

mail ($to, $subject, $message, "From: " . $name . $email);
echo "Your message has been sent";

?>