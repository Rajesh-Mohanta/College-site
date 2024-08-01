<?php
$name=$_POST[''];
$visitor=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_form='r2001mohanta@gmail.com';

$emal_subject='New Form Submission';
$email_body="user Name: $name.\n".
            "user Email:$visitor_email.\n".
            "Subject:$subject.\n";
            "User Message:$message.\n";

            $to="r2001mohanta@gmail.com";
            $headers="From:$email_form\r\n";

            $headers="Reply-To:$visitor_email\r\n";

            mail($To,$email,$subject,$email_body,$headers);
            header("Location:Contact.html");

?>