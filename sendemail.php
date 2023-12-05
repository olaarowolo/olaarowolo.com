<?php

$name = $_POST['from_name'];
$email = $_POST['email_id'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo 'The first name is -- ' . $name;

if($name && $email && $subject && $message){
    $to      = 'oa@olaarowolo.com';
    $subject = 'New Contact Request - ' . $subject;
    $headers = 'From: webmaster@olaarowolo.com'       . "\r\n" .
                 'Reply-To: webmaster@olaarowolo.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    return true;
}