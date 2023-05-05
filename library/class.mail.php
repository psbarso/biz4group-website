<?php

require_once 'phpMailer/PHPMailerAutoload.php';

class Mailer extends PHPMailer{
	
	public function sendMail($to, $subject, $body, $cc='',$bcc='', $attachment_arr=array())
	{
		$this->isSMTP();                                      // Set mailer to use SMTP
		//$this->Host = 'smtp.ionos.com';  // Specify main and backup SMTP servers
		//$this->SMTPAuth = true;                               // Enable SMTP authentication
		//$this->Username = 'info@biz4group.com';                 // SMTP username
		//$this->Password = 'Biz4Groupnew';                           // SMTP password
		//$this->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		
		$this->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$this->SMTPAuth = true;                               // Enable SMTP authentication
		$this->Username = 'biz4group@gmail.com';                 // SMTP username
		$this->Password = 'hkgqjhbvjjnhtoid';
		
		
		$this->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
		 $this->Port = 465;

		$this->From = 'info@Biz4group.com';
		$this->FromName = 'Biz4group';
		$to_arr = explode(',',$to);
		foreach($to_arr as $to_email)
		{
			$this->addAddress($to_email);     // Add a recipient
		
		}
		//$this->addAddress('bondre.gunal@gmail.com');     // Add a recipient
		//$this->addAddress('prashant@safsac.in', 'Prashant Gupta');     // Add a recipient
		//$this->addAddress('dhavalmehta89@gmail.com');               // Name is optional
		//$this->addReplyTo('info@example.com', 'Information');
		//$cc = MAIL_TO;
		$cc_arr = explode(',',$cc);
		$bcc_arr = explode(',',$bcc);
		foreach($cc_arr as $v)
		{
			$this->addCC($v);
		}
		foreach($bcc_arr as $v)
		{
			$this->addBCC($v);
		}
		//$this->addBCC('bcc@example.com');

		$this->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$this->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$this->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		foreach($attachment_arr as $k=>$v)
		{
			$this->addAttachment($v);
		}
		$this->isHTML(true);                                  // Set email format to HTML

		$this->Subject = $subject;
		$this->Body    = $body;
		
		
		if(!$this->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $this->ErrorInfo; die;
		} else {
			return true;
		}
	}
}
?>