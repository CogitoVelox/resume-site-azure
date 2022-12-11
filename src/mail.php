<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: $email\r\nReply-to: $email";

$recipient = 'https://eaheeren@gmail.com';

mail($recipient, $name, $message, $headers)
or die("Error!");
echo "Your message has been sent!";



?>