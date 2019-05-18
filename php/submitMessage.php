<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$to_email = "chrono232003@yahoo.com";
$subject = "Cleaning Inquiry.";
$message = "Name: " . $name . " Email: " . $email . " Subject: " . $subject . " Message: " . $message;
$headers = "From: noreply@diligentcleaners.com";

mail($to_email, $subject, $message, $headers);

header("Location: https://diligentcleaners.com?message=sent"); /* Redirect browser */
exit();

?>
