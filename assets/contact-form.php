<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "brian.edison.nguyen@outlook.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an email from " . $firstname . " " . $lastname . "\n\n" . $message;


    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}