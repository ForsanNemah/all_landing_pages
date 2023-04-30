<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '256M');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

$sender_email=$_POST['sender_email'];
$reciver_email=$_POST['reciver_email'];
$sender_pass=$_POST['sender_pass'];

$host=$_POST['host'];
$port=$_POST['port'];
$subject=$_POST['subject'];
$body=$_POST['body'];


echo " s email=".$sender_email;
echo " r email= ".$reciver_email;
echo " s pass=".$sender_pass;
echo " host=".$host;
echo " ports=".$port;
echo " subject=".$subject;
echo " body=".$body;


 
 

 
send_mail("ksa.kho.kart@gmail.com","ksa.kho.kart@gmail.com","tilnfgwfrfsoovqv",'subject','body',"smtp.gmail.com","465");

//echo send_mail($reciver_email,$sender_email,$sender_pass,$subject,$body,$host,$port);


function send_mail($re,$sender_email,$sender_pass,$subject,$body,$host,$port) {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $host;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $sender_email;                     //SMTP username
        $mail->Password   = $sender_pass;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($sender_email,  $subject);
        $mail->addAddress($re,  $subject);     //Add a recipient
         
        //Attachments
       // $mail->addAttachment('1.jpg');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =$body;
        $mail->AltBody = '
        
        
        
        
        
 
        
        
        
        
        
        
        
        ';
    
        $mail->send();


        echo "

     done
        ";
         
         
        
        
        
       return 'Done';
    } catch (Exception $e) {
       return "Fail: {$mail->ErrorInfo}";
    }
    
}

 