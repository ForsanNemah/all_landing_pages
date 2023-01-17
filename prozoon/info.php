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


    "website_title"=>"        مجمع بروزون الطبي ",
     "sub1"=>"     مجمع بروزون الطبي    ",
    "sub2"=>"   جراحة- أسنان - جلدية - ليزر - تجميل - تغذية  ",



    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 



);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>