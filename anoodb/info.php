<?php
error_reporting(E_ERROR | E_PARSE);

 
$ad_source="snap";

$logo_h='100px';
$logo_w='20px';
//echo $ad_source;







try {



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

    

    "website_title"=>"   صالون عنود بيوتي   ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"عروض   العيد  ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    صالون عنود بيوتي 

    ",


    
    "ev_form_sub1"=>"    
    املئي النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
    دللي نفسك  مع اقوى العروض 
    ",


    
    "lt_sub1"=>"    
    
خليها علينا -اكيد في صالون عنود بيوتي 
   
    ",


    "lt_sub2"=>"    





وماتنسي تشتركي في حساباتنا على منصات التواصل الاجتماعي  اسفل الصفحة

 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


    
  } catch(Exception $e) {
    
  }





















 





?>