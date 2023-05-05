<?php
session_start();
$status = 0;

if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
    $userans = $_REQUEST["captcha"];
    $number1 = $_REQUEST['no1'];
    $number2 = $_REQUEST['no2'];
    $total = $number1 + $number2;
    if($total == $userans){
        $status = 1;
    }
}else{
    $status = 0;
}
echo $status
?>