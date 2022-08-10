<?php
$name = $_post[ "name" ];
$visitor_email; = $_post[ "email" ];
$subject = $_post[ "subject" ];
$message = $_post[ "message" ];

$email_from = 'myserelisabeth8@gmail.com';

$email_subject = 'new form submission';
 
$email_body = "user name: $name.\n".
                "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: message .\n";

    $to = 'myserelisabeth8@gmail.com'; 
    
    $headers = "from: $email_from \r\n";

    $headers .= "reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>