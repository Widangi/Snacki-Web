<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail ->SMTPDebug = 3;

$mail ->isSMTP();
$mail ->SMTPAuth = true;

$mail ->Host = "smtp.gmail.com";
$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail ->Port = 587;

$mail ->Username = "nimesh.widanage@snackivending.ca";
$mail ->Password = "pudp oous ktqh uthu";

$mail ->setFrom("no-reply@snackivending.ca","DO NOT REPLY TO THIS");
$mail ->addAddress("info@snackivending.ca");
$mail ->addReplyTo($email,"FORM APPLICANT - REPLY TO THIS");

$mail ->IsHTML(true);

$mail ->Subject = $subject;
$mail ->Body = $message;
$mail ->AltBody = $message;

$mail ->send();
echo "Success";


?>
