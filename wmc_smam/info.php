<?php
error_reporting(E_ERROR | E_PARSE);

 
$ad_source="snap";

$logo_h='100px';
$logo_w='20px';
//echo $ad_source;







try {



    $items = array();



$handle = fopen("services/asteqdam_services.txt", "r");
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

    

    "website_title"=>"    شركة النافذة-لجميع الخدمات التسويقية   ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  عرض 2500 ريال  ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    شركة النافذة لجميع الخدمات التسويقية 
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
  وسيتم التواصل معك في اقل من 24 ساعة  
    ",


    
    "lt_sub1"=>"    
    


    تحسين ظهور حسابات نشاطك التجاري  وتطوير محتواك  يسهل وصول علامتك التجارية لشريحتك المستهدفة مما يزيد مبيعاتك. 
    ",


    "lt_sub2"=>"    


    تواصل معنا لنساعدك في هذا
 


 
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