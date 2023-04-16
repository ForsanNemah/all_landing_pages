 


<h2> 

General Works 



</h2>
<br>
 

<div id="works_id" class="carousel slide" data-bs-ride="carousel"  >
    <!-- Indicators -->
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

	
      

     
       

   
    
    

          

         

 

       

        

      <?php


if ($handle = opendir('assets/works')) {
  $counter=0;

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

if( $counter==0){

 
  echo "<div class='carousel-item  active ' >
  
  <img src='assets/works/$entry' class='d-block w-100' alt='Responsive image'   >

  </div>
  ";
  echo " ";
  echo "";


}
else{

  
   
  echo "<div  class='carousel-item'>
  
  <img src='assets/works/$entry' class='d-block w-100' alt='Responsive image'   >

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
    <button class='carousel-control-prev'type='button' data-bs-target='#works_id' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#works_id' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button> 

  </div>
  
  </div>

 






  