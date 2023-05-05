<?php

$message = '<html><body>';
$message .= '';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Do you want us to design a new website or modify an existing one?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['Onemsg']) . "</td></tr>";
$message .= "<tr><td><strong>What is the primary purpose of your website? How will this website add value to your business?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['Secondmsg']) . "</td></tr>";
$message .= "<tr><td><strong>Do you have any opinions specifically for color, theme and style? If you have any design related psd’s then please provide.</strong> </td><td><b>Message: </b>" . strip_tags($_POST['improvements']) . "</td></tr>";
$message .= "<tr><td><strong>Do you have a website icon or logo already? If yes, please attach the same. Do you want us to design the logo or website icon for you?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['trusted']) . "</td></tr>";
$message .= "<tr><td><strong>Please provide links to any website which has similar features/ functionality as your website?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['time_msg']) . "</td></tr>";
$message .= "<tr><td><strong>This website is multilingual or only in English?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['multilingual']) . "</td></tr>";
if(isset($_POST['lang_proj']) && $_POST['lang_proj'] != '') {
$message .= "<tr><td><strong>Specify the languages</strong> </td><td>" . strip_tags($_POST['lang_proj']) . "</td></tr>";	
}
$message .= "<tr><td><strong>Do you want your website to be responsive? Any preferable device?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['dream_proj']) . "</td></tr>";
$message .= "<tr><td><strong>Any preferable resolution for the website designs?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['focus_details']) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";

               
			   $attachments = array();
			   
			   if(count($_FILES) > 0) {
				   foreach($_FILES as $key_field => $file) {
					   if(isset($file["name"]) && $file["size"]>0){
							$attachments[$key_field] =$file;
					   }
				   }
			   }
				$uid = md5(time());
				
				
				$headers = "MIME-Version: 1.0\r\n";
		
				if(count($attachments) > 0)
				{
				//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers .= 'Content-Type: multipart/mixed; boundary="'.$uid.'"'."\r\n";
					
					$emessage = "This is a multi-part message in MIME format.\r\n";
					$emessage .= "--".$uid."\r\n";
					//$emessage .= 'Content-Type: multipart/alternative; boundary="'.$uid.'"'."\r\n";
					//$emessage .= "--".$uid."\r\n";
					$emessage .= "Content-type:text/html; charset=\"charset=UTF-8\"\r\n";
					$emessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
					$emessage .= $message."\r\n\r\n";
					$emessage .= "--".$uid."\r\n";
					foreach($attachments as $attachment) {
						
						$file_data = getFile($attachment);
						if(!empty($file_data)) {
							$emessage .= "--".$uid."\r\n";
							$emessage .= getFile($attachment);
						}
					}
					//$emessage .= "--".$uid."\r\n";
				}else {
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$emessage = $message;
				}
$to = 'sanjeev.verma@biz4group.com';

$subject = 'Contact Form Enquiries';
$from='sanjeev.verma@biz4group.com';
$headers .= "From: " . strip_tags($from) . "\r\n";

/*$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/

mail($to, $subject, $emessage, $headers);

echo '1'; exit;

function getFile($attachment) {  

        $allowedExts = array("doc","docx","csv","pdf","jpg","png","JPG","PNG","jpeg","JPEG");
        $temp = explode(".", $attachment["name"]);
        $extension = end($temp);
        $mimes = array('application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.ms-excel','text/plain','text/csv','text/tsv','application/jpg','image/jpg', 'image/jpeg', 'image/png','image/gif');

        if (in_array($attachment['type'],$mimes )
        && ($attachment["size"] < 2000000)
        && in_array($extension, $allowedExts))
          {
          if ($attachment["error"] > 0)
            {
            echo "Return Code: " . $attachment["error"] . "<br>";
            }
          else
            {      
                return prepareAttachment( $attachment["tmp_name"],$attachment["name"] );
			}
          }
        else
          {
          echo "Invalid file " . $extension . " {} " . $attachment['type'];
          //echo in_array($_FILES['uploaded_file']['type'],$mimes );
          }  
    }
	
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

?>