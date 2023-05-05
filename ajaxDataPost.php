<?php   
     if(isset($_POST['requestQuote'])){
        $postData = $_POST;
        $message = '<table border="1" width="300">';
        $message .= '<tr><th>Name:</th><td>'.$postData['name'].'</td></tr>';
        $message .= '<tr><th>Country:</th><td>'.$postData['country'].'</td></tr>';
        $message .= '<tr><th>Phone:</th><td>'.$postData['phone'].'</td></tr>';
        $message .= '<tr><th>Email:</th><td>'.$postData['email'].'</td></tr>';
        $message .= '<tr><th>Skype:</th><td>'.$postData['skype'].'</td></tr>';
        $message .= '<tr><th>Project Title:</th><td>'.$postData['projecttitle'].'</td></tr>';
        $message .= '<tr><th>Looking For:</th><td>'.implode(',',$postData['solutionType']).'</td></tr>';
        $message .= '<tr><th>Get started:</th><td>'.implode(',',$postData['getstarted']).'</td></tr>';
        $message .= '</table>';
        $attach = [];
        if(isset($_FILES['attach']) && !empty($_FILES['attach'])){
            $attach = $_FILES['attach'];
        }
        $mailData = ["subject" => 'Quote Request', "to" => 'priyanka@biz4group.com', "message" => $message, "attach" => $attach];
        emailMailerData($mailData);
        $response['status'] = 1;
        $response['msg'] = 'Submit Successfully';
        echo json_encode($response);
        die;
     }
     else if(isset($_POST['contactRequest'])){
        $postData = $_POST;
        $message = '<table border="1" width="300">';
        $message .= '<tr><th>Name:</th><td>'.$postData['name'].'</td></tr>';
        $message .= '<tr><th>Phone:</th><td>'.$postData['phone'].'</td></tr>';
        $message .= '<tr><th>Email:</th><td>'.$postData['email'].'</td></tr>';
        $message .= '<tr><th>Message:</th><td>'.$postData['message'].'</td></tr>';
        $message .= '</table>';
        $mailData = ["subject" => 'Contact Request', "to" => 'priyanka@biz4group.com', "message" => $message];
        emailMailerData($mailData);
        $response['status'] = 1;
        $response['msg'] = 'Submit Successfully';
        echo json_encode($response);
        die;
     }
     else if(isset($_POST['newsletter'])){
        $postData = $_POST;
        $apiKey = '434b82c73d7ee279472085c4f3ffb4a5-us18';
        $listID = '3752393638';
        $email = $postData['email'];
        $memberID = md5(strtolower($postData['email']));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed'
        ]);
        // send a HTTP POST request with curl
         $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
        $result = curl_exec($ch);  
        $message = '<table border="1" width="300">';
        $message .= '<tr><th>Email:</th><td>'.$postData['email'].'</td></tr>';
        $message .= '</table>';
        $mailData = ["subject" => 'Newsletter Request', "to" => 'priyanka@biz4group.com', "message" => $message];
        emailMailerData($mailData);
        $response['status'] = 1;
        $response['msg'] = 'Submit Successfully';
        echo json_encode($response);
        die;
     } else {
         $reback = $_SERVER['HTTP_REFERER'];
         header('location: '.$reback);
     }
function emailMailerData($mailData){
    
    $to = $mailData['to'];
    $subject = $mailData['subject'];
    $message = $mailData['message'];
    $headers = "From: " . strip_tags('info@biz4group.com') . "\r\n";
    $headers .= "Reply-To: ". strip_tags('info@biz4group.com') . "\r\n";
    //$headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    
    if(isset($mailData['attach'])){  
        if(!empty($mailData['attach'])){
         $strFilesName = $mailData['attach']["name"];  
         $strContent = chunk_split(base64_encode(file_get_contents($mailData['attach']["tmp_name"])));  
         //$headers .= "--".$strSid."\n";  
         $headers .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";  
         $headers .= "Content-Transfer-Encoding: base64\n";  
         $headers .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";  
         $headers .= $strContent."\n\n";  
        }
    }
    mail($to, $subject, $message, $headers);
}
?>