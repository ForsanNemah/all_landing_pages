<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
include('w_app.php');
?>
<body>



<?php

include('nav.php');


?>

<body>

 

  <!-- ======= Header/Navbar ======= -->
 <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
  

    <!-- ======= Contact Single ======= -->
<!-- End Contact Single-->





 


<br>
<br>

<br>
<br>

<br>
<br>


<?php
			//include our connection
            include "config/connection3.php";
     
 
			//query from the table that we create
			$sql = "SELECT * from department";
			$query = mysqli_query($con,$sql);
 
			while($row = mysqli_fetch_assoc($query)){
				//echo $row['rowid']."<br>";
			








$department_name= $row['dep_name_en'];
$department_id= $row['department_id'];

$desc_dep= $row['desc_dep'];
$price_dep= $row['price_dep'];
$video_url= $row['video_url'];


echo "

<br>
<br>

<div class='text-center'>
<h2> $department_name </h2>
</div>


<br>
 
<div class='container'>
<div id='a$department_id' class='carousel slide' data-bs-ride='carousel' >
    
 

 
    <div class='carousel-inner'   >

	
      
    


      


";

























			 

				$sql_in = "SELECT  * FROM dep_image where department_id=".$row['department_id']."";
				//echo 	$sql_in."<br>"; 
				$query_in = mysqli_query($con,$sql_in);
				//echo $query_in->fetchArray()."wwe_before";
        
        $counter=0;
				while($row_in =mysqli_fetch_assoc($query_in)   ){

					//echo $row_in['image_path']."<br>"."wwe";

          $entry=$row_in['dep_image'];
          if( $counter==0){

 
            echo "<div class='carousel-item  active '>
            
            <img src='admin/admin3/img/$entry' class='d-block w-100 ' alt='Responsive image'   >
          
            </div>

          

            ";
            echo " ";
            echo "";
          
          
          }
          else{
          
            
             
            echo "<div class='carousel-item '>
            
            <img src='admin/admin3/img/$entry' class='d-block w-100 ' alt='Responsive image'   >
          
            </div>
            ";
            echo " ";
            echo "";
            
          
          }
          $counter++;




				}
        //end of inner loop




        echo "
        
        
        
        
        
        
        <button class='carousel-control-prev'type='button' data-bs-target='#a$department_id' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#a$department_id' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button> 



  
  </div>
  
  </div>
 
       



  </div>
        
 




 
        
        
        
        
        
        
        ";














 
				echo "
        
        <div class='text-center'>

  
        <table class='table table-bordered'>
        <thead >
          <tr>
            <th scope='col'>Description</th>
            <th scope='col'>Price</th>
            <th scope='col'>Order</th>
             
          </tr>
        </thead>
        <tbody>
          <tr>
            <th> 
            
            
            $desc_dep
            
            </th>
            <td>
            $price_dep
            </td>


            <td>
            <a href='https://api.whatsapp.com/send/?phone=966568430828&text&type=phone_number&app_absent=0'>

            <i class='bi bi-whatsapp'></i>

            </a>
            </td>
             
          </tr>
           
        </tbody>
      </table>
        
        
        </div>
        
        
        "; 
					 
					 
			}
      //end of outer loop 





      
		?>








 











 









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php

include('footer.php');


?>
 <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<style>

.carousel {
  width:700px;
  height:700px;
  margin:0 auto;
}

 

@media only all and (max-width: 500px) {
  

  .carousel {
  width:450px;
  height:500px;
  margin:0 auto;
}

}

 
</style>
