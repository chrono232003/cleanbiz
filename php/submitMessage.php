<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$to_email = "chrono232003@yahoo.com";
$subject = "Web Design Inquiry from Cleaning Web Services.";
$message = "Name: " . $name . " Email: " . $email . " Subject: " . $subject . " Message: " . $message;
$headers = "From: noreply@cleaningwebservices.com";

mail($to_email, $subject, $message, $headers);

header("Location: https://cleaningwebservices.com?message=sent"); /* Redirect browser */
exit();

?>
