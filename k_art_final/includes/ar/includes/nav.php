<?php
include('header.php');
include('info.php');
include('w_app.php');
?>


<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" dir="rtl">
    <div class="container">

 

      <button class="navbar-toggler collapsed" id="clos" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    

    

      
      <a class="navbar-brand" href="#">
      <img src="assets/logo.png" width="200" height="60" alt="MDB Logo"
        loading="lazy" />
    </a>


    <!-- 


      <a class="navbar-brand text-brand" href="index.php">
        
  
      
      
      
      Khalid <span class="color-b">Art</span></a>
     -->
 
    





      <div class="collapse navbar-collapse" id="navbarDefault">


        <ul class="navbar-nav mr-auto ">

          <li class="nav-item" >
            <a class="nav-link " href="index.php">الرئيسية </a>
          </li>




          <li class="nav-item">
            <a class="nav-link " href="#about" onclick="close_nav()"> عنا   </a>
          </li>

         
          <li class="nav-item"    >
            <a class="nav-link " onclick="close_nav()" href="#customers"    >العملاء</a>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاستشارات</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="https://sprw.io/stt-a96709" target="_blank">عمليات المسح قبل التصميم </a>
              <a class="dropdown-item " href="https://sprw.io/stt-4abc3d" target="_blank">استبيان رضاء العملاء </a>
              <a class="dropdown-item " href="https://sprw.io/stt-295103" target="_blank">استبيان طلب زيارة استشارية </a>
            
            </div>
          </li>











          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الأقسام </a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="index_1.php">المقاولات العامة والتصميم الداخلي </a>
              <a class="dropdown-item " href="index_2.php">   مصنع الخشبيات </a>
              <a class="dropdown-item " href="index_3.php"> مبيعات العقارات </a>
            
            </div>
          </li>




          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">أعمالنا  </a>
            <div class="dropdown-menu">

             <a class="dropdown-item " href="department_1.php" target="_blank"> المقاولات العامة والتصميم الداخلي </a>
              <a class="dropdown-item " href="department_2.php" target="_blank">صناعة الخشب </a>
              <a class="dropdown-item " href="department_3.php" target="_blank"> مبيعات العقارات </a>
            
            </div>
          </li>








        
<!--
          <li class="nav-item">
            <a class="nav-link " href="contact.php">للتواصل </a>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">اللغة   </a>
            <div class="dropdown-menu">

             <a class="dropdown-item " href="index.php" target="_blank"> العربية  </a>
              <a class="dropdown-item " href="../../index.php" target="_blank">الإنجبيزية   </a>
            
            </div>
          </li>


-->
 
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">المزيد    </a>

            <div class="dropdown-menu">
            <a class="nav-link " href="contact.php">للتواصل </a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">اللغة    </a>
            <div class="dropdown-menu">
            <a class="dropdown-item " href="index.php" target="_blank"> العربية  </a>
              <a class="dropdown-item " href="../../index.php" target="_blank">الإنجليزية    </a>
            </div>
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
                <a class="nav-link" href="#">رابط 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">رابط 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">رابط 2</a>
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
 

