<?php

$email_to = "shivam.aggarwal@wingify.com";

$email_subject = "Your email subject line";

$email_message .= "First Name: "."\n";
$email_message .= "Last Name: "."\n";
$email_message .= "Email: "."\n";
$email_message .= "Telephone: "."\n";
$email_message .= "Comments: "."\n";

$email_from= "shivam.aggarwal@wingify.com";

$headers = 'From: '.$email_from."\r\n";

mail($email_to, $email_subject, $email_message, $headers);  
?>