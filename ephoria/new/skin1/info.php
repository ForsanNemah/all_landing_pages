<?php


$items = array();



$handle = fopen("services/skin1.txt", "r");
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
    "sub2"=>"عروض    يوم التأسيس     ",

    "counter_message"=>"   سارع بالحصول على عروض يوم التأسيس         ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>