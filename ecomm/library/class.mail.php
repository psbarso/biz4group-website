<?php

require_once 'phpMailer/PHPMailerAutoload.php';

class Mailer extends PHPMailer{
	
	public function sendMail($to, $subject, $body,$headers)
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
		//$this->Password = 'Biz4groupnewupdate@123';
		$this->Password = 'hkgqjhbvjjnhtoid';
		//$this->Password = 'ztmmipjkwyszjkjf';

				
		
		
		$this->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
		 $this->Port = 465;

		$this->From = 'no-reply@biz4intellia.com';
		$this->FromName = 'Biz4commerce';
		$this->addAddress($to);    
		$this->addAddress('ppc@biz4group.com');
		$this->addAddress('aishwarya@biz4group.com');		
		
		//$this->addReplyTo('info@example.com', 'Information');
	
		$this->WordWrap = 50;                                 // Set word wrap to 50 characters

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