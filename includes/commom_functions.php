<?php
 session_start();
 include_once 'library/class.mail.php';
function validate_recaptcha()
{
	
	$secret = '6LewlmAUAAAAAEQw49xSh03Q8l_3CneQVR_USGLa';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.G_RECAPTCHA_SECRET.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	return $responseData->success;
}
function sendMailGetInTouch()
{
	if(validate_recaptcha())
	{
		$ip_address 		= 	getenv("REMOTE_ADDR");
		$name				=	stripslashes($_REQUEST['sName']);
		$email				=	stripslashes($_REQUEST['sEmail']);
		$phone	    		=	stripslashes($_REQUEST['sContactNum']);
		$countryDialCode    =   isset($_REQUEST['sCountryDialCode']) ? stripslashes($_REQUEST['sCountryDialCode']):"";
		$description        =   stripslashes($_REQUEST['desc']);
					
		$lsBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>'.SITE_TITLE.'</title>
				<meta name="google-translate-customization" content="483e233d5979f53-c072d8173d94ff13-g5d2d27ad2b7c184a-1a"></meta>
				</head>
				<body style="margin:0; padding:0;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #E3E3E3;" align="center">
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td align="left">
					<table width="92%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">Thanks for contacting us.</td>
				  </tr>
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
					<tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">IP Address :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$ip_address.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Name :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$name.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Email Id :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Phone :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.($countryDialCode !=""?$countryDialCode." ":"").$phone.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Description :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$description.'</td>
				  </tr>
				  </table>
				</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				</table>
				
				 
				</td>
				  </tr>				   
				  <tr>
					<td align="left" style="background-color:#222121;">	
				
				<table width="92%" border="0" cellspacing="5" cellpadding="0" align="center" >
				  <tr>
				  
				
				<td valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:11px; color:#fff; text-align:center;" >
				All Rights Reserved &copy; Copyrights '.SITE_TITLE.'
				</td>
				   
				  </tr>
				</table>
				</td>
				  </tr>
				</table>
					</td>
				  </tr>
				</table>
				</body>
				</html>';
			
		
				$to   			= 	MAIL_TO;
				$subject  		= 	'Request A Quote Form Biz4group ';
						
				/*$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers.= 'Biz4intellia : <info@biz4intellia.com>' . "\r\n";*/
				
				$uid = md5(time());
				
				
				$headers = "MIME-Version: 1.0\r\n";
				
				if(isset($_FILES["attach_file"]["name"]) && $_FILES["attach_file"]["size"]>0)
				{
				//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers .= 'Content-Type: multipart/mixed; boundary="'.$uid.'"'."\r\n";
					
					$emessage = "This is a multi-part message in MIME format.\r\n";
					$emessage .= "--".$uid."\r\n";
					$emessage .= 'Content-Type: multipart/alternative; boundary="'.$uid.'"'."\r\n";
					$emessage .= "--".$uid."\r\n";
					$emessage .= "Content-type:text/html; charset=\"charset=UTF-8\"\r\n";
					$emessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
					$emessage .= $lsBody."\r\n\r\n";
					
						$emessage .= "--".$uid."\r\n";
						$emessage .= getFile();
						$emessage .= "--".$uid."--";
				}else {
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$emessage = $lsBody;
				}
				
				
				// header
				/*$header = "From: prashant@biz4group.com <prashant@biz4group.com>\r\n";
				$header .= "MIME-Version: 1.0\r\n";
				$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

				// message & attachment
				//$nmessage = "--".$uid."\r\n";
				//$nmessage .= "Content-type: multipart/alternative; boundary=\"$uid\"";
				$nmessage = "--".$uid."\r\n";
				$nmessage .= "Content-type: text/html; charset=\"UTF-8\"\r\n";
				$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
				$nmessage .= $lsBody."\r\n\r\n";
				//$nmessage .= "--".$uid."\r\n";
				//$nmessage .= getFile();
				
				$nmessage .= "--".$uid."--";*/
				
				
				$mail = new Mailer;
				
				
				//echo $headers;
				//if(mail($to,$subject,$emessage,$headers))
				if($mail->sendMail($to,$subject,$emessage))
				{
					$redirectURL = '';
					//$res=array("error"=>"","restype"=>"success");
					$redirectURL = SITE_URL.'thankyou';
					header("location:$redirectURL");
				}
				else
					$res=array("error"=>"Error","restype"=>"Error");
				
		
		
		
	}
	else
	{
		$res=array("error"=>"Invalid Captcha","restype"=>"error");
	}
	echo json_encode($res);
}
function sendMailContact()
{
	if(validate_recaptcha())
	{
		$ip_address 		= 	getenv("REMOTE_ADDR");
		$name				=	stripslashes($_REQUEST['sName']);
		$email				=	stripslashes($_REQUEST['sEmail']);
		$phone	    		=	stripslashes($_REQUEST['sContactNum']);
		$countryDialCode    =   isset($_REQUEST['sCountryDialCode']) ? stripslashes($_REQUEST['sCountryDialCode']):"";
		$subject			=	stripslashes($_REQUEST['sSubject']);
		$message			=	stripslashes($_REQUEST['sMessage']);
		 
					
		$lsBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>'.SITE_TITLE.'</title>
				<meta name="google-translate-customization" content="483e233d5979f53-c072d8173d94ff13-g5d2d27ad2b7c184a-1a"></meta>
				</head>
				<body style="margin:0; padding:0;">
				<table width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #E3E3E3;" align="center">
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td align="left">
					<table width="92%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">Thanks for contacting us.</td>
				  </tr>
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
					<tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">IP Address :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$ip_address.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Name :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$name.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Email Id :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Phone :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.($countryDialCode !=""?$countryDialCode." ":"").$phone.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Subject :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$subject.'</td>
				  </tr>
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Message :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$message.'</td>
				  </tr>
				  </table>
				</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				</table>
				
				 
				</td>
				  </tr>				   
				  <tr>
					<td align="left" style="background-color:#222121;">	
				
				<table width="92%" border="0" cellspacing="5" cellpadding="0" align="center" >
				  <tr>
				  
				
				<td valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:11px; color:#fff; text-align:center;" >
				All Rights Reserved &copy; Copyrights '.SITE_TITLE.'
				</td>
				   
				  </tr>
				</table>
				</td>
				  </tr>
				</table>
					</td>
				  </tr>
				</table>
				</body>
				</html>';
			
		
				$to   			= 	MAIL_TO;
				$subject  		= 	'Contact Form Biz4group ';
						
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers.= 'Biz4group : <info@Biz4group.com>' . "\r\n";
				/*mail($to,$subject,$lsBody,$headers);*/
				$mail = new Mailer;
				
				
				//echo $headers;
				//if(mail($to,$subject,$emessage,$headers))
					if($mail->sendMail($to,$subject,$lsBody)){
						
					}
				$res=array("error"=>"","restype"=>"success");
	}
	else
	{
		$res=array("error"=>"Invalid Captcha","restype"=>"error");
	}	
	echo json_encode($res);
}

/* function sendMailNewsletter()
{
	
		$ip_address 		= 	getenv("REMOTE_ADDR");
		$email				=	stripslashes($_REQUEST['email']);
					
		$lsBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>'.SITE_TITLE.'</title>
				<meta name="google-translate-customization" content="483e233d5979f53-c072d8173d94ff13-g5d2d27ad2b7c184a-1a"></meta>
				</head>
				<body style="margin:0; padding:0;">
				<table width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #E3E3E3;" align="center">
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td align="left">
					<table width="92%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">New Newsletter subscription.</td>
				  </tr>
				  <tr>
					<td valign="top">
					<table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
					<tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">IP Address :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$ip_address.'</td>
				  </tr>
				 
				  <tr>
					<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Email Id :</td>
					<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
				  </tr>
				  
				  </table>
				</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>
				</table>
				
				 
				</td>
				  </tr>				   
				  <tr>
					<td align="left" style="background-color:#222121;">	
				
				<table width="92%" border="0" cellspacing="5" cellpadding="0" align="center" >
				  <tr>
				  
				
				<td valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:11px; color:#fff; text-align:center;" >
				All Rights Reserved &copy; Copyrights '.SITE_TITLE.'
				</td>
				   
				  </tr>
				</table>
				</td>
				  </tr>
				</table>
					</td>
				  </tr>
				</table>
				</body>
				</html>';
			
		
				$to   			= 	MAIL_TO;
				$subject  		= 	'Subscribe Newsletter Form Biz4group ';
						
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers.= 'Biz4group : <info@biz4group.com>' . "\r\n";
				mail($to,$subject,$lsBody,$headers);
				$res=array("error"=>"","restype"=>"success");
	
	echo json_encode($res);
}
 */
function bookAppointment()
{
	
		if(true)
		{
			$ip_address 		= 	getenv("REMOTE_ADDR");
			$timezone				=	stripslashes($_REQUEST['timezone']);
			$date				=	stripslashes($_REQUEST['date']);
			$time				=	stripslashes($_REQUEST['time']);
			$cname				=	stripslashes($_REQUEST['cname']);
			$email				=	stripslashes($_REQUEST['email']);
			$phoneNo				=	stripslashes($_REQUEST['phoneNo']);
			$message				=	stripslashes($_REQUEST['message']);
			
						
			$lsBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
					<title>'.$sitetitle.'</title>
					<meta name="google-translate-customization" content="483e233d5979f53-c072d8173d94ff13-g5d2d27ad2b7c184a-1a"></meta>
					</head>
					<body style="margin:0; padding:0;">
					<table width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #E3E3E3;" align="center">
					  <tr>
						<td valign="top">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td align="left">
						<table width="92%" border="0" cellspacing="0" cellpadding="0" align="center">
					  <tr>
						<td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">One user requested for schedule a meeting.</td>
					  </tr>
					  <tr>
						<td valign="top">
						<table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
						<tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">IP Address :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$ip_address.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Time Zone :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$timezone.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Date :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$date.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Time :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$time.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Name :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$cname.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">E-mail :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Phone No :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$phoneNo.'</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">message :</td>
						<td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$message.'</td>
					  </tr>
					  
					  </table>
					</td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
					  </tr>
					</table>
					
					 
					</td>
					  </tr>				   
					  <tr>
						<td align="left" style="background-color:#222121;">	
					
					<table width="92%" border="0" cellspacing="5" cellpadding="0" align="center" >
					  <tr>
					  
					
					<td valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:11px; color:#fff; text-align:center;" >
					All Rights Reserved &copy; Copyrights '.$sitetitle.'
					</td>
					   
					  </tr>
					</table>
					</td>
					  </tr>
					</table>
						</td>
					  </tr>
					</table>
					</body>
					</html>';
				
					
					$to   			= 	MAIL_TO;
					$subject  		= 	'Calendar meeting Form Biz4group ';
							
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers.= 'Biz4group : <info@biz4group.com>' . "\r\n";
					if(mail($to,$subject,$lsBody,$headers))
					{
						$res=array("error"=>"","restype"=>"success");
						$_SESSION['ajax_call'] = $_REQUEST['bookAppointment'];
						//header('location:https://www.biz4group.com/thankyou');
					}
				
			
					/*$to   			= 	'info@biz4intellia.com';
					//$to   			= 	'prashant@biz4group.com';
					$cc   			= 	'madhukar@biz4group.com,akash@biz4group.com,sagar@biz4group.com,sabish@biz4group.com';
					$subject  		= 	'Calendar meeting Form Biz4intellia ';
							
					$mail = new Mailer;
					//if(true)
					if($mail->sendMail($to, $subject, $lsBody,$cc))
					{
						$res=array("error"=>"","restype"=>"success");
						$_SESSION['bookAppointment'] = $_REQUEST['bookAppointment'];
					}*/
					
					
		}
		else
		{
			$res=array("error"=>"Invalid Captcha!!! , please try again later.","restype"=>"error");	
							
		}
		echo json_encode($res);
}


function getFile() {  

        $allowedExts = array("doc","docx","csv","pdf","jpg","png","JPG","PNG","jpeg","JPEG");
        $temp = explode(".", $_FILES["attach_file"]["name"]);
        $extension = end($temp);
        $mimes = array('application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.ms-excel','text/plain','text/csv','text/tsv','application/jpg','image/jpg', 'image/jpeg', 'image/png','image/gif');

        if (in_array($_FILES['attach_file']['type'],$mimes )
        && ($_FILES["attach_file"]["size"] < 2000000)
        && in_array($extension, $allowedExts))
          {
          if ($_FILES["attach_file"]["error"] > 0)
            {
            echo "Return Code: " . $_FILES["attach_file"]["error"] . "<br>";
            }
          else
            {      
                return prepareAttachment( $_FILES["attach_file"]["tmp_name"],$_FILES["attach_file"]["name"] );
			}
          }
        else
          {
          echo "Invalid file " . $extension . " {} " . $_FILES['attach_file']['type'];
          //echo in_array($_FILES['uploaded_file']['type'],$mimes );
          }  
    }



//This function accepts post data on form submissions and prepare the email message from the form data.

    
function prepareAttachment( $filename ,$fileorgname) {
	$attachContent = '';
	$file = fopen($filename,"rb");
	$data = fread($file,filesize($filename));
	fclose($file);
	$cvData = chunk_split(base64_encode($data));
	$attachContent .= "Content-Type: application/octet-stream; name=\"".$fileorgname."\"\r\n"; // use different content types here
	$attachContent .= "Content-Transfer-Encoding: base64\r\n";
	$attachContent .= "Content-Disposition: attachment; filename=\"".$fileorgname."\"\r\n\r\n";
	$attachContent .= $cvData."\r\n\r\n";
	return $attachContent;
}


 // Function to get the client IP address
 function biz4_get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN'; 
    return $ipaddress;
}

function biz4_get_country_dial_code() {
	$ip = biz4_get_client_ip();
	if(isset($_SESSION["biz4_phone_dial_code"])){
		return $_SESSION["biz4_phone_dial_code"];
	}
	else{
		$res = file_get_contents('https://www.iplocate.io/api/lookup/'.$ip.'?apikey=7f334b3767ebcd43d7a8ce6a1409c1cd');
		$res = json_decode($res);

		$code = "+1";
		$country_dial_codes = '{"AF":"+93","AX":"+358","AL":"+355","DZ":"+213","AS":"+1684","AD":"+376","AO":"+244","AI":"+1264","AQ":"+672","AG":"+1268","AR":"+54","AM":"+374","AW":"+297","AU":"+61","AT":"+43","AZ":"+994","BS":"+1242","BH":"+973","BD":"+880","BB":"+1246","BY":"+375","BE":"+32","BZ":"+501","BJ":"+229","BM":"+1441","BT":"+975","BO":"+591","BA":"+387","BW":"+267","BR":"+55","IO":"+246","BN":"+673","BG":"+359","BF":"+226","BI":"+257","KH":"+855","CM":"+237","CA":"+1","CV":"+238","KY":"+ 345","CF":"+236","TD":"+235","CL":"+56","CN":"+86","CX":"+61","CC":"+61","CO":"+57","KM":"+269","CG":"+242","CD":"+243","CK":"+682","CR":"+506","CI":"+225","HR":"+385","CU":"+53","CY":"+357","CZ":"+420","DK":"+45","DJ":"+253","DM":"+1767","DO":"+1849","EC":"+593","EG":"+20","SV":"+503","GQ":"+240","ER":"+291","EE":"+372","ET":"+251","FK":"+500","FO":"+298","FJ":"+679","FI":"+358","FR":"+33","GF":"+594","PF":"+689","GA":"+241","GM":"+220","GE":"+995","DE":"+49","GH":"+233","GI":"+350","GR":"+30","GL":"+299","GD":"+1473","GP":"+590","GU":"+1671","GT":"+502","GG":"+44","GN":"+224","GW":"+245","GY":"+595","HT":"+509","VA":"+379","HN":"+504","HK":"+852","HU":"+36","IS":"+354","IN":"+91","ID":"+62","IR":"+98","IQ":"+964","IE":"+353","IM":"+44","IL":"+972","IT":"+39","JM":"+1876","JP":"+81","JE":"+44","JO":"+962","KZ":"+77","KE":"+254","KI":"+686","KP":"+850","KR":"+82","KW":"+965","KG":"+996","LA":"+856","LV":"+371","LB":"+961","LS":"+266","LR":"+231","LY":"+218","LI":"+423","LT":"+370","LU":"+352","MO":"+853","MK":"+389","MG":"+261","MW":"+265","MY":"+60","MV":"+960","ML":"+223","MT":"+356","MH":"+692","MQ":"+596","MR":"+222","MU":"+230","YT":"+262","MX":"+52","FM":"+691","MD":"+373","MC":"+377","MN":"+976","ME":"+382","MS":"+1664","MA":"+212","MZ":"+258","MM":"+95","NA":"+264","NR":"+674","NP":"+977","NL":"+31","AN":"+599","NC":"+687","NZ":"+64","NI":"+505","NE":"+227","NG":"+234","NU":"+683","NF":"+672","MP":"+1670","NO":"+47","OM":"+968","PK":"+92","PW":"+680","PS":"+970","PA":"+507","PG":"+675","PY":"+595","PE":"+51","PH":"+63","PN":"+872","PL":"+48","PT":"+351","PR":"+1939","QA":"+974","RO":"+40","RU":"+7","RW":"+250","RE":"+262","BL":"+590","SH":"+290","KN":"+1869","LC":"+1758","MF":"+590","PM":"+508","VC":"+1784","WS":"+685","SM":"+378","ST":"+239","SA":"+966","SN":"+221","RS":"+381","SC":"+248","SL":"+232","SG":"+65","SK":"+421","SI":"+386","SB":"+677","SO":"+252","ZA":"+27","SS":"+211","GS":"+500","ES":"+34","LK":"+94","SD":"+249","SR":"+597","SJ":"+47","SZ":"+268","SE":"+46","CH":"+41","SY":"+963","TW":"+886","TJ":"+992","TZ":"+255","TH":"+66","TL":"+670","TG":"+228","TK":"+690","TO":"+676","TT":"+1868","TN":"+216","TR":"+90","TM":"+993","TC":"+1649","TV":"+688","UG":"+256","UA":"+380","AE":"+971","GB":"+44","US":"+1","UY":"+598","UZ":"+998","VU":"+678","VE":"+58","VN":"+84","VG":"+1284","VI":"+1340","WF":"+681","YE":"+967","ZM":"+260","ZW":"+263"}';
		$country_code_array = json_decode($country_dial_codes, true);
		if(isset($res->country_code) && $country_code_array[$res->country_code]) {
			$code = $country_code_array[$res->country_code];
			$_SESSION["biz4_phone_dial_code"] = $code;
		}
		return $code;
	}
}

function get_client_ip($pageTitle="") {
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
  
  
  
	
	$myfile = fopen("ip-log/logs.txt", "a") or die("Unable to open file!");
  
  fwrite($myfile, "\n". $ipaddress." - ".$pageTitle);
  fclose($myfile);
	return $ipaddress;
  }

?>