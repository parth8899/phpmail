<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'parthkamani21@gmail.com';          // SMTP username
$mail->Password = 'PARTHPBKBSKJBK19943981'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                 // TCP port to connect to

$mail->setFrom('parthkamani21@gmail.com', 'parthkamani');
$mail->addReplyTo('parthkamani678@gmail.com');
$mail->addAddress('parthkamani678@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML


$mail->Subject = 'hello';
$mail->Body    = $bodyContent  hello ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>