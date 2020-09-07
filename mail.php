<?php
// if ( isset( $_POST['submit'] ) ) {
    
    $to = "sujithindustantechnologysystem@gmail.com";
    $subject = "Enquiry(Hindustan Technology System)";
    $txt = "Name: ". $_REQUEST['username']. "\nEmail: ". $_REQUEST['email']. "\nSubject: ". $_REQUEST['subject']. "\nMessage: ". $_REQUEST['message'];
    $headers = "From: info@hindustantechnologysystem.com" . "\r\n" .
    "CC: paikaraylaxman@gmail.com";

    mail($to,$subject,$txt,$headers);
    echo "Mail sent successfully."
// }
?>