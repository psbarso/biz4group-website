<?php

 
session_start();

$status = 0;

if ( isset($_POST['captcha2']) && ($_POST['captcha2']!="") ){
    $userans = $_REQUEST["captcha2"];
    $number1 = $_REQUEST['no3'];
    $number2 = $_REQUEST['no4'];
    $total = $number1 + $number2;
    if($total == $userans){
        $status = 1;
    }
}else{
    $status = 0;
}
?>