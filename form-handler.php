<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'aghowinem@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "user name: $name.\n ".
              "user Email: $visitor_email.\n ".
              "Subject: $subject.\n ".
              "message: $message.\n ";

$to = 'aghowinem@gmail.com';
$headers = "From: $emaill_form \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html")
 ?>
