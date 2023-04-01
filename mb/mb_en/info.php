<?php


$items = array();



$handle = fopen("services/at.txt", "r");
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

    

    "website_title"=>"    Window SMTP Server  ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  مركز اسلوب الحياة للتغذية العلاجية     ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    Send your  email to thousands of your customers with just one click
    ",


    
    "ev_form_sub1"=>"    
    Fill out the form with your email information
    
    ",


    "ev_form_sub2"=>"    
    
then Launch your campaign now
    ",


    
    "lt_sub1"=>"    
    
    Contact with thousands of your customers via your official email and with only one click  


    ",


    "lt_sub2"=>"    
    Free for a limited time
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>