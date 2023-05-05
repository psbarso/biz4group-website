<?php

 
session_start();

$status = 0;

if ( isset($_POST['captcha5']) && ($_POST['captcha5']!="") ){
    $userans = $_REQUEST["captcha5"];
    $number1 = $_REQUEST['no5'];
    $number2 = $_REQUEST['no6'];
    $total = $number1 + $number2;
    if($total == $userans){
        $status = 1;
    }
}else{
    $status = 0;
}
?>