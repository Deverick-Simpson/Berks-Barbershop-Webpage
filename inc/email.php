<?php

if (!$_POST['sender']) {
    $errName = 'Please enter your name';
}


if (!$_POST['senderEmail'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

if($_POST["submit"]) {
    $recipient="deverick@me.com";
    $subject=$_POST["subject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    echo $thankYou;
}

?>