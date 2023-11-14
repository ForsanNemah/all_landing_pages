<?php


 


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


 


  $slider_images;

  if ($handle = opendir($dir)) {
    $counter=0;
  
      while (false !== ($entry = readdir($handle))) {
  
          if ($entry != "." && $entry != "..") {



           
            //echo $entry."<br>";
  

            if( $counter==0){







              $slider_images="<div class='item  active '>
  
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              </div>"."";












            }
            else{

         

              $slider_images=$slider_images." <div class='item '>
  
              <img src='$dir/$entry' class='img-responsive' alt='Responsive image'   >
            
              </div>"." ";

            }



            $counter++;






  
 
             
          }
      }
  
      closedir($handle);
  }
  
  









 //echo $slider_images."<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";
 //echo "<br>";
































echo "

 

 

 
<br>
<div id='$id' class='carousel slide' data-ride='carousel'  >
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#$id' data-slide-to='0' class='active'></li>
      <li data-target='#$id' data-slide-to='1'></li>
      <li data-target='#$id' data-slide-to='2'></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class='carousel-inner' >

	
      

     
       

   
    
    

          

         

 

       

        

 

 
 ".$slider_images."
           

          



           




         


           
    
       

    <!-- Left and right controls -->
    <a class='left carousel-control' href='#$id' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#$id' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>

  </div>
  
  </div>






";


echo "



<h2>  
  
$des




</h2>
<br>
<h3>  
 
$des2




</h3>

";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


}


?>



