<?php


$items = array();



$handle = fopen("services/ak_services.txt", "r");
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

    

    "website_title"=>"   AK SPA",
     "sub1"=>"       ",
    "sub2"=>" 
    شريكك الموثوق به عندما يتعلق الأمر بالاسترخاء والتدليك الاحترافي
    ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  اشترى احدث موديلات شانجان         ",
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