<?php


$items = array();



$handle = fopen("asnan_services.txt", "r");
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


    "website_title"=>"        د/جودة السيد جودة ",
     "sub1"=>"     سيب شرح مواد القانون علينا     ",
    "sub2"=>" د/جودة السيد جودة     محاضر في جامعة القاهرة -عين شمس -بني سويف-الامسر سلطان-اليمامة   ",



    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>