<?php


$items = array();



$handle = fopen("services/asnan_services.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items['Peter'.$i]=$line;


    }

    fclose($handle);
}









$info = array(

    

    "website_title"=>"     صفوة المهيدب لطب الأسنان ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  عروض خاصة من مجمع صفوة المهيدب لطب الأسنان    ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    صفوة المهيدب لطب الأسنان
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
    واحصل على العرض
    ",


    
    "lt_sub1"=>"    
    
 لإبتسامة أجمل واسنان مكتملة 
    ",


    "lt_sub2"=>"    
 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);














$phn="96653461224";
$end_date="20-3-2023";
$end_time="12:00";
$ad_source="snap   ";
$action_url="https://script.google.com/macros/s/AKfycbxjNGhU9ipbGJOWAv73xrTEBwlk8wWyISu5-hhQL9Dnu7wbAOqpYrzUVDHDPTIBaQhD/exec";





?>