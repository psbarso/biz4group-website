<?php 
require_once 'library/class.mail.php';
$errors = '';
$to = 'hr@biz4group.com';
$subject='Resume';
//print_r ($_POST);
if(empty($_POST['title'])||
   empty($_POST['firstname'])  ||
   empty($_POST['lastname'])  ||
   empty($_POST['email'])||
   empty($_POST['contact_no']) ||
   empty($_POST['city'])||
   empty($_POST['job_title'])||
   empty($_POST['current_company'])||
   empty($_POST['exp_relevent'])||
   empty($_POST['current_ctc']))
{
    $errors .= "\n Error: all fields are required";
}
$title=$_POST['title'];
$firstname=$_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$contact_no=$_POST['contact_no'];
$city = $_POST['city'];
$job_title=$_POST['job_title'];
$current_company=$_POST['current_company'];
$exp_relevent=$_POST['exp_relevent'];
$current_ctc=$_POST['current_ctc'];
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
    <td  valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e;">Thanks for contacting us.</td>
  </tr>
  <tr>
    <td valign="top">
    <table width="100%" border="0" cellspacing="2" cellpadding="8" align="center" style=" background-color:#fff; border:1px solid #f0efee;">
    <tr>
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Candidate Name :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$title.$firstname. $lastname.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Email Id :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$email.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Contact no :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$contact_no.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">City :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$city.'</td>
  </tr>
  <tr>
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Job Title :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$job_title.'</td>
  </tr>
  <tr>
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Current Company :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$current_company.'</td>
  </tr>
  <tr>
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Experience :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$exp_relevent.'</td>
  </tr>
  <tr>
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Current CTC :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$current_ctc.'</td>
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
$cc = 'hr@biz4group.com';



//print_r($_POST);
/* if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email))
{
    $errors .= "\n Error: Invalid email address";
} */

if( empty($errors))
{
    $mail = new Mailer;
    if($mail->sendMail($to, $subject, $lsBody,$cc))
    {
        //echo "mail sent successfully";
        unlink($resumefile);
		header('location:career');
    }
    else
        echo "mail not send";
}
else
{

    echo $errors;
}
?>