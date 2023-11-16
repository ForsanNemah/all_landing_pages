<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbxykR1AmDDQBA8kbRZsVKsR1hr2iL8_ecbVpBJ8wsFzKrgtDFhXwNbepXPQbJcef3c8jw/exec";

$logo_h='150px';
$logo_w='150px';
$form_bg_color="#3d6ab4";
$bg_image="skin.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="966562585111";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.instagram.com/dr.kareem_asran/";
$snap_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$gmap_url="https://goo.gl/maps/S1Zko9MvKiYzqPQV9";

$site_name="   عيادة انسام الطبية";
$dr_name=
"
 

";
$add_title="اقوى العروض ";

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






    $items_branches = array();



$handle = fopen("branches.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items_branches['Peter'.$i]=$line;


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
    
واحصل على العروض
    ",


    
    "lt_sub1"=>"    
    

 
    ",


    "lt_sub2"=>"    

 

    تتوفر خدمة التقسيط على دفعات



 
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