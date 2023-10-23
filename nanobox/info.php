<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbwK_BJIatbtTxi3AA1A5ZS9d9fRGV5PzD_1V_o7rs_p9UAAMKZXvjQZBFiMaz1QhN8V/exec";

$logo_h='200px';
$logo_w='200px';
$form_bg_color="#0d5eaa";
$bg_image="asnan.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="966536960929";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$snap_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$gmap_url="https://goo.gl/maps/S1Zko9MvKiYzqPQV9";

$site_name="  نانو  بوكس";
$dr_name="  ";
$add_title="شريك النجاح لمتجرك الالكتروني ";

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
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
 وسيتم التواصل معك فورا 
    ",


    
    "lt_sub1"=>"    
    

 
    ",


    "lt_sub2"=>"    

 
    نحن 
    مبتكرون 
    ونتطلع للمستقبل



 
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