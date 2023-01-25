<?php


$items = array();



$handle = fopen("services/kh_courses.txt", "r");
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


    "website_title"=>"    مركز الكوثر للتدريب معتمد من المؤسسة العامة للتدريب التقني والمهني",
     "sub1"=>"        مركز الكوثر للتدريب     ",
    "sub2"=>" معتمد من المؤسسة العامة للتدريب التقني والمهني    ",

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