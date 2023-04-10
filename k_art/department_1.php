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
            include "config/connection.php";
     
 
			//query from the table that we create
			$sql = "SELECT * from department";
			$query = mysqli_query($con,$sql);
 
			while($row = mysqli_fetch_assoc($query)){
				//echo $row['rowid']."<br>";
			








$department_name= $row['dep_name_en'];
$department_id= $row['department_id'];


echo "

<br>
<br>

<h2> $department_name </h2>
<br>
 

<div id='$department_id' class='carousel slide' data-ride='carousel'  >
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#$department_id' data-slide-to='0' class='active'></li>
      <li data-target='#$department_id' data-slide-to='1'></li>
      <li data-target='#$department_id' data-slide-to='2'></li>
    </ol>

 
    <div class='carousel-inner' >

	
      
    


      


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

 
            echo "<div class='item  active '>
            
            <img src='$entry' class='img-responsive' alt='Responsive image'   >
          
            </div>
            ";
            echo " ";
            echo "";
          
          
          }
          else{
          
            
             
            echo "<div class='item '>
            
            <img src='$entry' class='img-responsive' alt='Responsive image'   >
          
            </div>
            ";
            echo " ";
            echo "";
            
          
          }
          $counter++;




				}
        //end of inner loop




        echo "
        
        
        
        
        
        
        
 
    <a class='left carousel-control' href='#$department_id' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#$department_id' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>

  </div>
  
  </div>
 
        
        
        
        <br>
        <br>
        
        
        
        
        
        
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