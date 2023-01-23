<?php
$name = $_POST ['Name'];
$visitor_email = $_POST ['Email'];
$subject = $_POST ['Subject'];
$message = $_POST ['Message'];

$email_from = 'azizcurci888@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n". 
               "Subject: $subject.\n".
               "User Message: $message.\n";



$to = 'azizcurci888@gmail.com';

$headers ="From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>
