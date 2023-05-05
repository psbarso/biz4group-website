<?php
require_once('includes/config.php');
?>
<?php
		if(!isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == '')
		{
			$res=array("error"=>"Invalid Captcha!!! , please try again later.","restype"=>"error");
			echo json_encode($res);die;
		}
		$secret = G_RECAPTCHA_SECRET;
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$responseData = json_decode($verifyResponse);
		print_r($_POST);
		if($responseData->success){
$message = '<html><body>';
$message .= '';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";

 

$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['msg']) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";

 

$to = 'sakshi@biz4group.com,himanshi@biz4group.com';

$subject = 'request a demo form';
$from= 'sakshi@biz4group.com';
$headers = "From: " . strip_tags($from) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

echo '1'; exit;
}

?>