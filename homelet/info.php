<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbwIhgeS4E0T93rz0xzULMypn7KKzmCgmXMbwYRwgW5d7UsrhRX0g7uIfZI2PaJmnsIh/exec";

$logo_h='200px';
$logo_w='200px';
$form_bg_color="#3cb4aa";
$bg_image="asnan.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="966578035989";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$snap_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$gmap_url="https://homeoutlet0.com/";

$site_name="متجر هوم اوت لت";
$dr_name="  ";
$add_title="  تسوق معنا من ميلانو";

$sidebar1_msg="نحلم ونحقق";
$sidebar2_msg="خدماتنا ";
$sidebar3_msg="خدماتنا ";
















//echo "<script> alert('".$gmap_url."'); </script>";

 





try {



    $items = array();



$handle = fopen("services.txt", "r");
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

    

    "website_title"=>$site_name,
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>$sidebar1_msg,
 "sidebar2_msg"=>$sidebar2_msg,
 "sidebar3_msg"=>$sidebar3_msg,

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>
    $site_name
    ,



    
    "ev_form_sub1"=>"    
    اطلب الآن
    
    ",


    "ev_form_sub2"=>"    
    
 
    ",


    
    "lt_sub1"=>"    
    

 
    ",


    "lt_sub2"=>"    

 

  تبدأ الجولة من السبت 21 اكتوبر الى 1 نوفمبر



 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


    
  } catch(Exception $e) {
    
  }





















 





?>