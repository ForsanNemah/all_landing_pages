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


    "website_title"=>" عيادات ليبرتي  ",
     "sub1"=>"         عيادات ليبرتي    ",
    "sub2"=>" اسنان-جلدية    ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>