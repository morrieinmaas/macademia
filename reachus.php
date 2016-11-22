<?php

    $email   = $_POST['email'];
    $message = $_POST['message'];

    $to      = "info@macademia.guru";
    $subject = "New Request";
    $headers = "From: $email";

    mail($to,$subject,$message,$headers);

?>