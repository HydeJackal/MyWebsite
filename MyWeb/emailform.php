<?php

if(isset($_POST["submit"])) {
$to = "hydejackal5628@google.com";
$from = $_POST['inputEmail'];
$subject = $_POST['emailSubject'];
$message = $_POST['emailTextArea'];

$my_message = $from . " wrote the following" . "\n\n" . $message;
$return_message = "Thank you for reaching out to me! This is an automated message confirming your message has been sent." . "\n\n" .
"Here is a copy of your response: " . "\n\n" . $message . "\n\n" . "I'll be in contact soon." . "\n\n" . "Best Regards," . "\n\n" . "Jeffrey Shen";

$return_subject = "Thank you reaching out! Automated Reply to: " . $subject

$my_header = "From: " . $from;
$return_header = "From: " . $to

mail($to, $subject, $my_message, $my_header);
mail($from, $return_subject, $return_message, $return_header);
header("Mail Sent. Thank you! I will contact you shortly.");
}

?>