<?php
error_reporting(E_ERROR | E_PARSE);

 
$ad_source="وتساب";

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

    

    "website_title"=>"    منصة تقييمات خرائط جوحل      ",
     "sub1"=>"       منصة تقييمات خرائط جوحل     ",
    "sub2"=>"  منصة تقييمات خرائط جوحل  
      ",

    "counter_message"=>"     قيم قبل انتهء العداد وزد عدد نقاطك         ",



 "sidebar1_msg"=>"       لحق اقوى العروض     ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    منصة تقييمات خرائط جوحل
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
  وسيتم فتح رابط التقييم مباشرة 
    ",


    
    "lt_sub1"=>"    
    
 
    ",


    "lt_sub2"=>"    



 



 
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