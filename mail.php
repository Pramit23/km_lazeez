<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message Phone:$phone Subject:$subject ";
$recipient = "pramitmajumdar23555@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient,$formcontent, $mailheader) or die("Error!");
echo "Message Sent successfully!";


?>
