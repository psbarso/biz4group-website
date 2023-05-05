<?php

$message = '<html><body>';
$message .= '';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Are you interested in a mobile application or mobile website?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['interestedApp']) . "</td></tr>";
$message .= "<tr><td><strong>Do you want a hybrid app or native app?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['typeofApp']) . "</td></tr>";
$message .= "<tr><td><strong>If mobile app, would you want us to design a new app or modify an existing one?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['appType']) . "</td></tr>";
$message .= "<tr><td><strong>What is the primary purpose of your mobile app? How will this app add value to your business?</strong> </td><td><b>Message: </b>" . strip_tags($_POST['Onemsg']) . "</td></tr>";
$message .= "<tr><td><strong>What device(s) is the application expected to work on?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['device']) . "&nbsp;" . strip_tags($_POST['deviceOne']) . "&nbsp;" . strip_tags($_POST['deviceTwo']) . "&nbsp;" . strip_tags($_POST['deviceThree']) . "&nbsp;" . strip_tags($_POST['deviceFour']) . "</td></tr>";
$message .= "<tr><td><strong>Do you want us to do all the design?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['appTypeGraphic']) . "</td></tr>";
$message .= "<tr><td><strong>Do you have any opinions specifically for color, theme and style? If you have any design related psd’s then please provide.</strong> </td><td><b>Message: </b>" . strip_tags($_POST['Secondmsg']) . "</td></tr>";
$message .= "<tr><td><strong>Do you have any opinions specifically for color, theme and style? If you have any design related psd’s then please provide.</strong> </td><td><b>Message: </b>" . strip_tags($_POST['Thirdmsg']) . "</td></tr>";
$message .= "<tr><td><strong>Do you want your app portrait or landscape or both?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['portraitLandscape']) . "</td></tr>";
$message .= "<tr><td><strong>Please provide links to any app which has similar features/ functionality as your app? These could be direct competition or in a similar industry.</strong> </td><td><b>Message: </b>" . strip_tags($_POST['improvements']) . "</td></tr>";
$message .= "<tr><td><strong>Is this app multilingual or only in English?</strong> </td><td><b>Option Choose: </b>" . strip_tags($_POST['multilingual']) . "</td></tr>";
if (isset($_POST['email']) && $_POST['email'] != '') {
    $message .= "<tr><td><strong>What language do you want to use?</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
}

$message .= "</table>";
$message .= "</body></html>";

$attachments = array();

if (count($_FILES) > 0) {
    foreach ($_FILES as $key_field => $file) {
        if (isset($file["name"]) && $file["size"] > 0) {
            $attachments[$key_field] = $file;
        }
    }
}
$uid = md5(time());

$headers = "MIME-Version: 1.0\r\n";

if (count($attachments) > 0) {
    //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'Content-Type: multipart/mixed; boundary="' . $uid . '"' . "\r\n";

    $emessage = "This is a multi-part message in MIME format.\r\n";
    $emessage .= "--" . $uid . "\r\n";
    //$emessage .= 'Content-Type: multipart/alternative; boundary="'.$uid.'"'."\r\n";
    //$emessage .= "--".$uid."\r\n";
    $emessage .= "Content-type:text/html; charset=\"charset=UTF-8\"\r\n";
    $emessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $emessage .= $message . "\r\n\r\n";
    $emessage .= "--" . $uid . "\r\n";
    foreach ($attachments as $attachment) {
        if (is_array($attachment["name"])) {
            for ($i = 0; $i < count($attachment["name"]); $i++) {
                $fileName = $attachment["name"][$i];
                if ($fileName && (strlen($fileName) > 0)) {
                    $file_data = getFiles($attachment, $i);
                    if (!empty($file_data)) {
                        $emessage .= "--" . $uid . "\r\n";
                        $emessage .= getFiles($attachment, $i);
                    }
                }
            }
        } else {
            $file_data = getFile($attachment);
            if (!empty($file_data)) {
                $emessage .= "--" . $uid . "\r\n";
                $emessage .= getFile($attachment);
            }
        }
    }
    //$emessage .= "--".$uid."\r\n";
} else {
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $emessage = $message;
}

$to = 'sanjeev.verma@biz4group.com';

$subject = 'Contact Form Enquiries';
$from = 'sanjeev.verma@biz4group.com';
$headers .= "From: " . strip_tags($from) . "\r\n";

/*$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/

mail($to, $subject, $emessage, $headers);

echo '1';
exit;

function getFiles($attachment, $i)
{
    $allowedExts = array("doc", "docx", "csv", "pdf", "jpg", "png", "JPG", "PNG", "jpeg", "JPEG");
    $temp = explode(".", $attachment["name"][$i]);
    $extension = end($temp);
    $mimes = array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'text/plain', 'text/csv', 'text/tsv', 'application/jpg', 'image/jpg', 'image/jpeg', 'image/png', 'image/gif');

    if (in_array($attachment['type'][$i], $mimes)
        && ($attachment["size"][$i] < 5000000)
        && in_array($extension, $allowedExts)) {
        if ($attachment["error"][$i] > 0) {
            echo "Return Code: " . $attachment["error"][$i] . "<br>";
        } else {
            return prepareAttachment($attachment["tmp_name"][$i], $attachment["name"][$i]);
        }
    } else {
        echo "Invalid file " . $extension . " {} " . $attachment['type'][$i];
        //echo in_array($_FILES['uploaded_file']['type'],$mimes );
    }
}

function getFile($attachment)
{
    $allowedExts = array("doc", "docx", "csv", "pdf", "jpg", "png", "JPG", "PNG", "jpeg", "JPEG");
    $temp = explode(".", $attachment["name"]);
    $extension = end($temp);
    $mimes = array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'text/plain', 'text/csv', 'text/tsv', 'application/jpg', 'image/jpg', 'image/jpeg', 'image/png', 'image/gif');

    if (in_array($attachment['type'], $mimes)
        && ($attachment["size"] < 5000000)
        && in_array($extension, $allowedExts)) {
        if ($attachment["error"] > 0) {
            echo "Return Code: " . $attachment["error"] . "<br>";
        } else {
            return prepareAttachment($attachment["tmp_name"], $attachment["name"]);
        }
    } else {
        echo "Invalid file " . $extension . " {} " . $attachment['type'];
        //echo in_array($_FILES['uploaded_file']['type'],$mimes );
    }
}

function prepareAttachment($filename, $fileorgname)
{
    $attachContent = '';
    if(file_exists($filename)) {
        $content = file_get_contents($filename);
        $content = chunk_split(base64_encode($content));
        $attachContent .= "Content-Type: application/octet-stream; name=\"" . $fileorgname . "\"\r\n"; // use different content types here
        $attachContent .= "Content-Transfer-Encoding: base64\r\n";
        $attachContent .= "Content-Disposition: attachment; filename=\"" . $fileorgname . "\"\r\n\r\n";
        $attachContent .= $content . "\r\n\r\n";
        return $attachContent;
    }
}

?>