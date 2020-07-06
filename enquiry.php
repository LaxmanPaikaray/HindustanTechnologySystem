<?php
// if ( isset( $_POST['submit'] ) ) {
    
    $to = "paikaraylaxman@gmail.com";
    $subject = "Enquiry(Hindustan Technology System)";
    $txt = "Someone enquiried with this mobile no: ". $_REQUEST['mobile'];
    $headers = "From: info@hindustantechnologysystem.com" . "\r\n" .
    "CC: laxman@sdrc.co.in";

    mail($to,$subject,$txt,$headers);
    echo "We will get back to you very soon."
// }
?>