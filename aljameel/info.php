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


    "website_title"=>"    مجمع الجميل لطب الاسنان ",
     "sub1"=>"        مجمع الجميل لطب الاسنان   ",
    "sub2"=>"خصم 60% على جميع الخدمات ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",

    "sidebar1_msg"=>"   عرض يوم التأسيس خصم 60% على جميع الخدمات       ",
 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>