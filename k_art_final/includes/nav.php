


<?php
include('header.php');
include('info.php');
include('w_app.php');
?>


<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top"  >
    <div class="container">
 
 
   




      <button class="navbar-toggler collapsed" id="clos" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    

    

      
      <a class="navbar-brand" href="#">
      <img src="assets/logo.png" width="300" height="80" alt="MDB Logo"
        loading="lazy" />
    </a>


    <!-- 


      <a class="navbar-brand text-brand" href="index.php">
        
  
      
      
      
      Khalid <span class="color-b">Art</span></a>
     -->
 
    





      <div class="collapse navbar-collapse" id="navbarDefault">


        <ul class="navbar-nav mr-auto ">

          <li class="nav-item" >
            <a class="nav-link " href="index.php">Home</a>
          </li>




          <li class="nav-item">
            <a class="nav-link " href="#about" onclick="close_nav()">About</a>
          </li>

         
          <li class="nav-item"    >
            <a class="nav-link " onclick="close_nav()" href="#customers"    >Customers</a>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultation</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="https://sprw.io/stt-a96709" target="_blank">Pre-design process survey</a>
              <a class="dropdown-item " href="https://sprw.io/stt-4abc3d" target="_blank">Customer satisfaction survey</a>
              <a class="dropdown-item " href="https://sprw.io/stt-295103" target="_blank">Consultation visit request questionnaire</a>
            
            </div>
          </li>











          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="index_1.php">General Contracting and Interior Design</a>
              <a class="dropdown-item " href="index_2.php">The Manufacture of Wood </a>
              <a class="dropdown-item " href="index_3.php""> Real Estate Sales</a>
            
            </div>
          </li>




          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our work </a>
            <div class="dropdown-menu">

             <a class="dropdown-item " href="department_1.php" target="_blank"> General Contracting and Interior Design</a>
              <a class="dropdown-item " href="department_2.php" target="_blank">The Manufacture of Wood</a>
              <a class="dropdown-item " href="department_3.php" target="_blank"> Real Estate Sales</a>
            
            </div>
          </li>








         <!--

          <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact</a>
          </li>


        

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language   </a>
            <div class="dropdown-menu">

             <a class="dropdown-item " href="./ar/index.php" target="_blank"> Arabic   </a>
              <a class="dropdown-item " href="index.php" target="_blank">English    </a>
            
            </div>
          </li>


-->












          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
            <div class="dropdown-menu">

            <a class="dropdown-item " href="contact.php" target="_blank"> Contact</a>
               
            
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language  </a>
            <div class="dropdown-menu">

            <a class="dropdown-item " href="./ar/index.php" target="_blank"> Arabic   </a>
              <a class="dropdown-item " href="index.php" target="_blank">English    </a>
            
            </div>
          </li>







         
          

          



        </ul>
      </div>

  
    </div>
  </nav>
 









  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
        </ul>
    </div>
</nav>














<script>
function close_nav() {


  //alert("done");
  document.getElementById("clos").click();


/*
 
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarDefault')
const bsCollapse = new bootstrap.Collapse(menuToggle)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { bsCollapse.toggle() })
     
})
*/
}
</script>


<style>



 

  . 

 

nav-link {
    padding-right: 0.0rem;
    padding-left: 0.0rem;
}


 



</style>
 

