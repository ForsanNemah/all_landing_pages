<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbzwaM78h1WeINvaI35MzstwFMgX1qsZDz29VIhPkmv3sBXat-d-0RpnwYuZJt8KLky8/exec";

$logo_h='300px';
$logo_w='300px';
$form_bg_color="#8C730C";
$bg_image="asnan.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="966535988145";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.snapchat.com/add/dr_aabedm?share_id=opLNGapfKuI&locale=en-GB";
$snap_url="https://instagram.com/dr.abed_eltaweel?utm_source=qr&igshid=OGIxMTE0OTdkZA==";
$gmap_url="https://goo.gl/maps/S1Zko9MvKiYzqPQV9";

$site_name=" عيادات رويال الطبية   ";
$dr_name=
"
 
";
$add_title="50% خصومات تصل الى ";

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