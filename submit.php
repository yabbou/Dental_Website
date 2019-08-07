<?php

if($_POST["submit"]) {

    $recipient = "jacobabbou@outlook.com";
    $name = $_POST["senderName"];
    $email = $_POST["senderEmail"];

    $subject = "Denture Clinic Website Question";
    $message = $_POST["message"];
    $contentForEmail= "Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $contentForEmail, "From: $sender <$senderEmail>");
}

?>