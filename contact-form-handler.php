<?php

$name = $_POST["name"];
$visitor_email = $_POST["email"];
$message = $_POST["message"];

$email_from = "info@woodco-sa.com";

$email_subject = "Contact Info";

$emil_body = "CONTACT INFO DETAILS \n";
              "User Name: $name. \n";
              "User Email: $visitor_email. \r\n";
              "User Message: $message. \n";

$to = "info@woodco-sa.com";

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location : index.html");

?>