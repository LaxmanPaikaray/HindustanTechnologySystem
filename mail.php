<?php
// if ( isset( $_POST['submit'] ) ) {
    
    $to = "paikaraylaxman@gmail.com";
    $subject = "Enquiry(Hindustan Technology System)";
    $txt = "Name: ". $_REQUEST['username']. "\nEmail: ". $_REQUEST['email']. "\nSubject: ". $_REQUEST['subject']. "\nMessage: ". $_REQUEST['message'];
    $headers = "From: info@hindustantechnologysystem.com" . "\r\n" .
    "CC: laxman@sdrc.co.in";

    mail($to,$subject,$txt,$headers);
    echo "Mail sent successfully."
// }
?>