<?php
session_start();
$status = 0;
if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
// Validation: Checking entered captcha code with the generated captcha code
if(($_SESSION['captcha'] == $_POST['captcha'])){
 //Note: the captcha code is compared case insensitively.
 //if you want case sensitive match, check above with strcmp()
$status = 1;
}else{
$status = 0;
 }
}
echo $status;

?>