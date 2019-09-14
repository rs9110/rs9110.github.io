<?php 
if($_POST) {
    $recipient="rosis.dahal@gmail.com";
    $subject="PORTFOLIO | Email from portfolio site";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}
?>