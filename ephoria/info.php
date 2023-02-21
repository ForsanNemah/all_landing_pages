<?php


$items = array();



$handle = fopen("services/ephoria_tagmeel_services2.txt", "r");
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


    "website_title"=>"     عيادات   ايفوريا",
     "sub1"=>"       عيادات ايفوريا    ",
    "sub2"=>"عروض يوم التأسيس   خصومات تصل الى 40%    ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",

    "sidebar1_msg"=>"   عروض يوم التأسيس        ",
 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>