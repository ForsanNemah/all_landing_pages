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


    "website_title"=>"      مرحبا بكم في عيادات ميبل ",
     "sub1"=>"        مرحبا بكم في عيادات ميبل  ",
    "sub2"=>" أسنانك في أيدي آمنة  ",

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