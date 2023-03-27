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

    

    "website_title"=>"   مجمع ناس لطب الاسنان والتجميل   ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  عروض شهر رمضان المبارك  ",
 "sidebar2_msg"=>"  كوادر مجمع ناس الطبي    ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    مجمع ناس لطب الاسنان والتجميل
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
    واحصل على العروض
    ",


    
    "lt_sub1"=>"    
    
    مجمع عيادات ناس لطب الأسنان بالأحساء
 
    ",


    "lt_sub2"=>"    



  

    برج الملحم التجاري، طريق الظهران، وسط الأحساء، الهفوف‎ 36341



 
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