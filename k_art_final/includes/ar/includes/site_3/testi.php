 


<h2> أراء العملاء  </h2>
<br>
 

<div id="testi_id" class="carousel slide" data-bs-ride="carousel"  >
    <!-- Indicators -->
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

	
      

     
       

   
    
    

          

         

 

       

        

      <?php


if ($handle = opendir('assets/testi')) {
  $counter=0;

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

if( $counter==0){

 
  echo "<div class='carousel-item  active ' >
  
  <img src='assets/testi/$entry' class='d-block w-100' alt='Responsive image'   >

  </div>
  ";
  echo " ";
  echo "";


}
else{

  
   
  echo "<div  class='carousel-item'>
  
  <img src='assets/testi/$entry' class='d-block w-100' alt='Responsive image'   >

  </div>
  ";
  echo " ";
  echo "";
  

}
$counter++;
           
        }
    }

    closedir($handle);
}




?>


 
 
           

          



           




         


           
    
       

    <!-- Left and right controls -->
    <button class='carousel-control-prev'type='button' data-bs-target='#testi_id' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>السابق</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#testi_id' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>التالي </span>
  </button> 

  </div>
  
  </div>

 





