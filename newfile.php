<?php      print_r($_REQUEST);  die;
require_once 'library/class.mail.php';
$errors = '';
$to = 'hr@biz4group.com';
$subject='Resume';
//print_r ($_POST);
if(empty($_POST['name'])  ||
   empty($_POST['phoneno']) ||
   empty($_POST['email'])||
   empty($_POST['title'])||
   empty($_POST['message'])||
   //empty($_POST['resumefile']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$phoneno=$_POST['phoneno'];
$email= $_POST['email'];
$message = $_POST['message'];
$title=$_POST['title'];
//$current_salary=$_POST['resumefile'];
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
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Name :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$name.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Phone No :</td>
    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$phoneno.'</td>
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
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">title :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$title.'</td>
  </tr>
  <tr>
  <td align="left" valign="top" width="130" style="font-family: Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#3e3e3e; background-color:#f2f2f2;">Current Salary :</td>
  <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  color:#3e3e3e; background-color:#f7f7f7;">'.$current_salary.'</td>
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
$resumefile='upload/'.$_FILES["resumefile"]["name"];
move_uploaded_file($_FILES["resumefile"]["tmp_name"],$resumefile);



//print_r($_POST);
/* if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email))
{
    $errors .= "\n Error: Invalid email address";
} */

if( empty($errors))
{
    $mail = new Mailer;
    if($mail->sendMail($to, $subject, $lsBody,$cc,'',array($resumefile)))
    {
        echo "mail sent successfully";
        unlink($resumefile);
		header('location:thankyou');
    }
    else
        echo "mail not send";
}
else
{

    echo $errors; echo '0000';
}
?>