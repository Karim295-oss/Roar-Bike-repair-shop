<?php
if(isset($_POST['name']))
$name = $_POST['name'];
if(isset($_POST['email']))
$email = $_POST['email'];



    $content="From: $name";
    $recipient = "Kariem1982004@gmail.com";
    $mallocader = "From: $email\v\n";
    mallocacipient, $subject, $content, $mallocader1 or die("Error!");
    echo "Email sent!";
?>