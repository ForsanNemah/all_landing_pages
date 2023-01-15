<?php


$items = array();



$handle = fopen("types.txt", "r");
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


    "website_title"=>"     عيادات آراك فرع العذيبه    ",
     "sub1"=>"      عيادات آراك فرع العذيبه      ",
    "sub2"=>"      عروض الأسنان    ",



    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>