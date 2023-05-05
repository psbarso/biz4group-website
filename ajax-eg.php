<?php

$message = '<html><body>';
$message .= '';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['improvements']) . "</td></tr>";	
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";	
$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['number']) . "</td></tr>";
if(isset($_POST['email_sub']) && $_POST['email_sub'] != '') {
$message .= "<tr><td><strong>Email-Refrence:</strong> </td><td>" . strip_tags($_POST['email_sub']) . "</td></tr>";
}
if(isset($_POST['number-sub']) && $_POST['number-sub'] != '') {	
$message .= "<tr><td><strong>Phone Number-Refrence:</strong> </td><td>" . strip_tags($_POST['number-sub']) . "</td></tr>";
}

$message .= "<tr><td><strong>Do you see constant quality improvements?</strong> </td><td><b>Rating: </b>" . strip_tags($_POST['qa_rating']) . "</td></tr>";
$message .= "<tr><td><strong>Does your contact person work as a trusted advisor?</strong> </td><td><b>Rating: </b>" . strip_tags($_POST['trust_rating']) . "</td></tr>";
$message .= "<tr><td><strong>Are you receiving timely delivery?</strong> </td><td><b>Rating: </b>" . strip_tags($_POST['time_rating']) . "</td></tr>";
$message .= "<tr><td><strong>Do we have required technical expertise to work on your dream project?</strong> </td><td><b>Rating: </b>" . strip_tags($_POST['dream_rating']) . "</td></tr>";
$message .= "<tr><td><strong>Do we focus on details?</strong> </td><td><b>Rating: </b>" . strip_tags($_POST['focus_rating']) . "</td></tr>";
/*$message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";*/

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
$to = 'yogesh@biz4group.com';

$subject = 'Contact Form Enquiries';
$from='yogesh@biz4group.com';
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