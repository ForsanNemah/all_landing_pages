<?php


 

make_slider("banners","one","","");
/*
make_slider("sidebar1","one","احصل على ابتسامة المشاهير ","");


make_slider("sidebar2","tow","د/كريم عسران","خبير تجميل وزراعة الاسنان");
make_slider("sidebar3","three","دكتور عابد الطويل","تركيبات ثابته ومتحركة ..معالجات العصب والحشوات التجميلية..ابتسامة هوليود ..علاجات اللثة");
//make_slider("sidebar2","tow","","");
 
make_slider("sidebar4","four","د ابراهيم امان","خبير تجميل الاسنان");
make_slider("sidebar5","five","د اسامه مصطفى","خبير تجميل الاسنان");
make_slider("sidebar6","six","د/عبدالله فوزي   ","خبير تجميل الاسنان");
//make_slider("sidebar2","tow");
//make_slider("sidebar3","three");

*/
?>








<?php








  function  make_slider ($dir,$id,$des,$des2)


{


 
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  $slider_images;

  if ($handle = opendir($dir)) {
    $counter=0;
  
      while (false !== ($entry = readdir($handle))) {
  
          if ($entry != "." && $entry != "..") {



           
            //echo $entry."<br>";
  

            if( $counter==0){







              $slider_images=" 
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              "."";












            }
            else{

         

              $slider_images=" 
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              "."";

            }



            $counter++;






  
 
             
          }
      }
  
      closedir($handle);
  }
  
  









 echo  $slider_images."<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";































 


echo "



<h2>  
  
$des




</h2>
<br>
<h3>  
 
$des2




</h3>

";



}


?>



