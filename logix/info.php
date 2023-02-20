<?php


$items = array();



$handle = fopen("services/logix_services.txt", "r");
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

    

    "website_title"=>"  شركة الحلول القياسية  ",
     "sub1"=>"       أقوى العروض   من شركة الحلول القياسية  ",
    "sub2"=>" 
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"        ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>