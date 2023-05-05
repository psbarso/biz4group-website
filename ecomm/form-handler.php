<?php 
 $msg ='';
 $msgClass ='';
 require_once 'library/class.mail.php';


 if(filter_has_var(INPUT_POST, 'submit')){
   

   $email = htmlspecialchars($_POST['email']);
   $name = htmlspecialchars($_POST['name']);
   $message = htmlspecialchars($_POST['message']);
   $phone = htmlspecialchars($_POST['phone']);
     $feature = htmlspecialchars($_POST['feature']);

  //  check required fields

  if(!empty($email) && !empty($name)){
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
      $msg = 'please use a valid email';
      $msgClass = 'alert-danger';
    }else{
      $to = "aishwarya@biz4group.com";
      $subject = "Biz4Commerce Quotation" ;
      $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
          <td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">Thanks for contacting us.Find the requested details below</td>
        </tr>
        <tr>
          <td valign="top">
          <table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
          <tr>
          <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Name :</td>
          <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$name.'</td>
        </tr>
        <tr>
          <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Phone No :</td>
          <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$phone.'</td>
        </tr>
        <tr>
          <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Email Id :</td>
          <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
        </tr>
        <tr>
          <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Message :</td>
          <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$message.'</td>
        </tr>
   
         <tr>
          <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Feature :</td>
          <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$feature.'</td>
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
      All Rights Reserved &copy; Copyrights 
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
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
          $headers .= 'From:' .$name. "<".$email. ">". "\r\n";
		//  $headers .= 'Cc: bondre.gunal@gmail.com' . "\r\n"; 

          $mail = new Mailer;

          if($mail->sendMail($to,$subject,$body,$headers)){
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
			header('location:thank-you.php');

          }else{
            $msg = 'Email fail to sent';
            $msgClass = 'alert-danger';

          }
               
      
      ;
    }
  }else{
    $msg = 'please fill in all fields';
    $msgClass = 'alert-danger';
		 echo "failed to process";
	 	header('location:quoteGenerator.php');
  }
 }


?>
