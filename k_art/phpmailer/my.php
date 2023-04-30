<?php
require 'index.php';

if(isset($_POST['save'])){

$name= $_POST['name'];
$email= $_POST['email'];
$phn= $_POST['phn'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$full_subject=$name."-".$phn."-".$email."-".$subject;

 send_mail("ksa.kho.kart@gmail.com","ksa.kho.kart@gmail.com","tilnfgwfrfsoovqv",$full_subject,$message,"smtp.gmail.com","465");




}


?>