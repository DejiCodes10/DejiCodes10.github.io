<?php
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'zigylarge.epizy.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n" .
    "User lastName: $lastName.\n".
    "User phoneNumber:$phoneNumber.\n".
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n.";

$to = "zigylargeglobal@gmail.com";

$headers = "From: $email_from\r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.htm");

?>