
<section class="container-fluid bg-primary head-nav">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="text-center header-logo">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="logo">
                         





                        <?php


if ($handle = opendir('logo')) {


    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

 

  
  //echo "$entry\n";
  echo "
  
  
  
  <img   src='logo/$entry' class='img-fluid' alt='Responsive image' width='150px' height='150px' >
  

  
  ";
  
  
  break;
 

 
           
        }
    }

    closedir($handle);
}




?>











                        <h3 class="text-dark" style="font-size:1.2em!important">
                        
                        <?php

include 'info.php';

  

echo "  <h4 style='color:black' class='pulsate'>".$info['ev_logo_name']."</h4>";
echo "  <h4 style='color:black' class='pulsate'> د/ محمد الحصى</h4>";
echo "  <h2 style='color:green' class='pulsate'>عروض  اليوم الوطني</h2>";
//echo "  <h3><a style='color:blue'  href='".$gmap_url."'>موقعنا على الخريطة </a></h3>";


?>
                  
                  
                      </h3>
                     
                      <br>

                      <?php
if($sliders==1){
echo "


<a href='#slider_1' style=' color: blue;'> الاطلاع على خدماتنا وعروضنا </a>



";

}

 
                      ?>


                      
                      <br>
                      <br>
                      <br>



                      <
                    </div>
                </div>
            </div>

        </div>
    </section>
