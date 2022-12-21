<?php
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lucifa1010@gmail.com';
$mail->Password = 'ynzuqujcctjxbirk';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('lucifa1010@gmail.com');
$mail->addAddress('najmul@qsoft.net');
$mail->isHTML(true);
$mail->Subject = 'Hello';
$mail->Body = "This is Test Message";
$mail->send();

echo "Mail Send";