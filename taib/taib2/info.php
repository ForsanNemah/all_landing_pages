<?php


$items = array();



$handle = fopen("services/taib_services.txt", "r");
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

    

    "website_title"=>"    طيب المجالس للعود ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  عروض طيب المجالس للعود    ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    طيب المجالس للعود
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
    واحصل على العرض
    ",


    
    "lt_sub1"=>"    
    
    تشكيلة واسعة من العود والبخور والعطور والأعسال بين يديكم بأسعار تنافسية✨
    تصل إليكم خلال 3 أيام عمل🛒
    ",


    "lt_sub2"=>"    
    مع إمكانية التقسيط المريح مع تمارا 🎁
    تسوق الآن
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>