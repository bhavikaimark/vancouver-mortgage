<?php

include('../../../../wp-config.php');

global $wpdb;


    //$userName = $_POST['data1'];
$name1 = $_POST['name1'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$p_or_r = $_POST['p_or_r'];
$piv = $_POST['piv'];
$credit_score = $_POST['credit_score'];
$first_time = $_POST['first_time'];
$estimated = $_POST['estimated'];
$down_pay = $_POST['down_pay'];
$buying_stage = $_POST['buying_stage'];
$time_frame = $_POST['time_frame'];
$agent = $_POST['agent'];
$recommend = $_POST['recommend'];
	//echo $userName;


//vdass@xeva.ca
$to = "bhavika.varu@imarkinfotech.com,vdass@xeva.ca,rohit.bhaskar@imarkinfotech.com";
$subject = "Vancouver Mortgage";
$headers = "From: ". $email . "\r\n";

$txt = "Purchase or refinance: " .$p_or_r. "\r\n" . "The property will be used for: " .$piv. "\r\n";
$txt .= "Credit score: " .$credit_score. "\r\n" . "First time home buyer: " .$first_time. "\r\n";
$txt .= "Estimated purchase price: " .$estimated. "\r\n" ."Down payment size: " .$down_pay. "\r\n";
$txt .= "Home buying stage: " .$buying_stage. "\r\n" . "Time frame for purchase: " .$time_frame. "\r\n";
$txt .= "Have an agent: " .$agent. "\r\n" . "Want us to recommend someone: " .$recommend. "\r\n";

$txt .= "Want us to send you the pre approval" . "\r\n";
$txt .= "Name: ".$name1. "\r\n" . "Phone: ".$phone. "\r\n" . "Email: " .$email. "\r\n" . "City: " .$city. "\r\n";



//mail($to,$subject,$txt,$headers);
if(@mail($to,$subject,$txt,$headers)){
	echo "1";
}


?>