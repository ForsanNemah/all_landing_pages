<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '256M');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions



//send_mail("myproeng@gmail.com");

function send_mail($re,$sender_email,$sender_pass) {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $sender_email;                     //SMTP username
        $mail->Password   = $sender_pass;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($sender_email, 'انتخابات مجلس إدارة غرفة جدة');
        $mail->addAddress($re, 'انتخابات مجلس إدارة غرفة جدة');     //Add a recipient
         
        //Attachments
        $mail->addAttachment('1.jpg');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '
        
    
        
        انتخابات مجلس إدارة غرفة جدة
        
        
        ';
        $mail->Body    = '
        
        
            
        
        
        ‏السلام عليكم ورحمة الله
تحية طيبه وبعد ..
السادة / منسوبي الغرفة التجارية بجدة    المحترمين
أحب أن أشارككم ترشيحي لمجلس إدارة غرفة جدة وسيتم البدء بالتصويت من يوم 28 فبراير إلى يوم 2 مارس الكترونيا
 اخوكم المرشح : الدكتور علي بن حسن الناقور
 رقم المرشح : [ 21 ]
أتمنى دعمكم والتصويت
( استمد نجاحي من ثقتكم وتصويتكم ودعمكم لي )
 على هذا الرابط : https://voting.mc.gov.sa/

اخوكم المرشح : الدكتور علي بن حسن الناقور  رقم المرشح : [ 21 ]
تحتاج رقم السجل التجاري 
و رقم الهوية 
اختيار المرشح رقم 21 يجيك رقم توثيق على جوالك ادخل رقم التوثيق صوت .. التصويت بدأ الان وحتى يوم الخميس ..

https://alinagoor.com/
        
        
        ';
        $mail->AltBody = '
        
        
        
        
        
 
        
        
        
        
        
        
        
        ';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}