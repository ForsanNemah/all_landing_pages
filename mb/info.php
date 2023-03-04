<?php


$items = array();



$handle = fopen("services/at.txt", "r");
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

    

    "website_title"=>"    مركز اسلوب الحياة للتغذية العلاجية  ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"  مركز اسلوب الحياة للتغذية العلاجية     ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
وصل ايميلك الى
الألاف
من عملائك بنقرة زر واحدة 
    ",


    
    "ev_form_sub1"=>"    
    املأ النموذج 
    ببيانات   ايميلك
    
    ",


    "ev_form_sub2"=>"    
    
  وأطلق حملتك الان 
    ",


    
    "lt_sub1"=>"    
    
    تواصل مع الألاف من عملائك
    عبر ايميلك الرسمي 
    و
    بنقرة زر واحدة
    ",


    "lt_sub2"=>"    
 مجانا ولفترة محدودة 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


















?>