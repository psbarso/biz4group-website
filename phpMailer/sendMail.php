<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.ionos.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'prashant@biz4group.com';                 // SMTP username
$mail->Password = 'Biz4new';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'prashant@biz4group.com';
$mail->FromName = 'Prashant';
$mail->addAddress('prashant@biz4group.com', 'Prashant Gupta');     // Add a recipient
//$mail->addAddress('bondre.gunal@gmail.com');     // Add a recipient
//$mail->addAddress('prashant@safsac.in', 'Prashant Gupta');     // Add a recipient
//$mail->addAddress('dhavalmehta89@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b><br><br>To stop receiving these emails please <a href="biz4group.com">click here</a> to unsubscribe. ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>