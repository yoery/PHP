<?php
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = "This is an automated message. Please don't reply to this email. \n\n $message";

$headers = "From: $from";

mail($to, $subject, $body, $headers);

echo "Message Sent! <a href='INDEX.html'>Click here</a> to send another email"; 


?>