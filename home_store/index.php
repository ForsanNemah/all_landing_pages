
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="title" content="">
    <meta property="description" content=" ">
    <meta property="url" content=" ">
    <meta property="site_name" content=" ">
    <meta property="og:type" content="">
    <meta property="og:title" content=" ">
    <meta property="og:description" content=" ">
    <meta property="og:url" content=" ">
    <meta property="og:site_name" content=" ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>
      
  
    <?php

include 'info.php';

 echo $info['website_title'];




?>

  
  
  </title>
    <style>
        /* WhatsApp Button */

        .whatsApp {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 10px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-whatsApp {
            margin-top: 9px;
        }
    </style>














<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
















<script type="text/javascript" src="info.js"></script>









 


 








<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'b3b2118e-a136-4c72-9fa1-f0bc5abc3767', {
'user_email': '_INSERT_USER_EMAIL_'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->




</head>
<body>
  



<div 
class="bg-light  "
>
<div id="cta_whatsapp" >
 


</div>



<div id="cta_call">
 


</div>
</div>



















    <div>
        
    </div>
    <!-- Header -->
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
  
  
  
  <img   src='logo/$entry' class='img-fluid' alt='Responsive image' width='300px' height='250px' >
  
  
  
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

 echo $info['ev_logo_name'];




?>
                      
                      </h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Appointment Section -->






   

    <div id="count_down_counter">



</div>







    <section class=" appointment">
        <div class="appointment-section">
            <div class="container">


            
















                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form">
                            <div class="appointment-form text-center">



          

<div class="container h-100 d-flex justify-content-center">
<div class="appointment-title text-light" id="myloader"         >
<div class="loader"></div> 
</div>
</div>


<div class="container h-100 d-flex justify-content-center">

<div class="appointment-title text-light"  id="done_icon"  >
<img src="ads/done.gif" class="img-fluid" width='100px' height='100px' alt="Responsive image"   >

</div>

</div>







                                <form id="form" role="form"      method="post" name="myform" bgcolor=”#800000">





                                    <p class="appointment-title text-light">     

                                    <?php

include 'info.php';

 echo $info['ev_form_sub1'];




?>
                                    
                                    </p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">   
                                  
                                  
                                  
                                  
                                    <?php

include 'info.php';

 echo $info['ev_form_sub2'];




?>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  </p>












 




















                                    <div class="form-group" hidden >
                                        <input name="name" type="text" class="form-control" value="وتساب  " placeholder="الاسم" required>
                                    </div>

                                   

                                   
                                   


                          







                                  





                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="datetime" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


                                    <button id="send1" type="submit" class="btn submit-btn ">
                                        
                                    اطلب من هنا 1



                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>





                                    
                                    </button>
                                </form>









                                <form id="form2" role="form"      method="post" name="myform2" bgcolor=”#800000">





                                    <p class="appointment-title text-light">     

                                    <?php

include 'info.php';

 echo $info['ev_form_sub1'];




?>
                                    
                                    </p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">   
                                  
                                  
                                  
                                  
                                    <?php

include 'info.php';

 echo $info['ev_form_sub2'];




?>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  </p>












 




















                                    <div class="form-group" hidden >
                                        <input name="name" type="text" class="form-control" value="وتساب 2" placeholder="الاسم" required>
                                    </div>

                                   

                                   
                                   


                          







                                  





                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="datetime" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


                                    <button id="send2" type="submit" class="btn submit-btn ">
                                        
                                    اطلب من هنا 2



                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>





                                    
                                    </button>
                                </form>






                                <form id="form3" role="form"      method="post" name="myform3" bgcolor=”#800000">





                                    <p class="appointment-title text-light">     

                                    <?php

include 'info.php';

 echo $info['ev_form_sub1'];




?>
                                    
                                    </p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">   
                                  
                                  
                                  
                                  
                                    <?php

include 'info.php';

 echo $info['ev_form_sub2'];




?>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  </p>












 




















                                    <div class="form-group" hidden >
                                        <input name="name" type="text" class="form-control" value=" زيارة الفرع " placeholder="الاسم" required>
                                    </div>

                                   

                                   
                                   


                          







                                  





                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="datetime" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


                                    <button id="send3" type="submit" class="btn submit-btn btn-info">
                                        
                                 تشرفنا في فرعنا 



                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
</svg>





                                    
                                    </button>
                                </form>











































                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 passion">
                        <div class="text-center text-lg-right">
                            <h4 class="text-light">
                            <?php

include 'info.php';

 echo $info['lt_sub1'];




?>
                            </h4>
                            <br />
                            <p class="text-light" style="font-size: 1.2em; font-size: 1.2em; font-family: inherit !important ">             <?php

include 'info.php';

 echo $info['lt_sub2'];




?>
             </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <br>
   <br>
    <section>



	<div class="how-it-works-container section-container section-container-gray-bg  "    >
	        <div class="container">

         
	            <div class="row">


               

<div id="slider1"></div>
           

  </div>	 
<br>

  <div class="row">
	                 

                   <div id="slider2"></div>
                              
                   
                     </div>	 


                     <br>

  <div class="row">
	                 

                   <div id="slider3"></div>
                              
                   
                     </div>	 
                   
                   




</div>
 </div>
</div>





















        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <a class="btn btn-primary" style="background-color: #1c3c49 " href="#form">  اطلب الان </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="page-footer font-small blue">
    
<!-- Copyright -->
<div class="footer-copyright text-center py-3">    جميع الحقوق محفوظة:
  <a href="https://wmc-ksa.com/">  شركة النافذة للتسويق الالكتروني </a>
</div>
<!-- Copyright -->

</footer>

    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="js/main.js"></script> -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    
    <script>

$(document).ready(function () {
  //alert(ad_source);

  //$("#source_id").val('dddd');

  //alert($("#source_id_form").val());

  var element = document.getElementById("myloader");
        element.style.display = "none"
        var done_icon = document.getElementById("done_icon");
        done_icon.style.display = "none"
 


  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

	var currentdate = new Date(); 
var datetime = "" + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + "  "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                //alert(datetime);


                //$("#includedContent").load("form_name_phn_type.php"); 
                $("#slider1").load("slider1.php"); 
                //$("#slider2").load("slider2.php"); 
               // $("#cta_whatsapp").load("cta/cta_whatsapp.php"); 
           // $("#cta_call").load("cta/cta_call.php"); 
               // $("#slider3").load("slider3.php"); 
                
               // $("#includedContent").load("form_name_phn.php"); 
                // $("#includedContent").load("form_only_whatsapp.php"); 
				
            //    $("#count_down_counter").load("count_down.php");
                //$("#tabel_1").load("tabel_1.php"); 
 
    

      const scriptURL = action_url

  form = document.forms['myform']
 
  form.addEventListener('submit', e => {

    //waitingDialog.show();
    
    
	$(':input[type=submit]').prop('disabled', true)
  $('#today').attr('value', datetime )
  element.style.display = "block"
  //alert("progress")
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => 
 
      
      google_response()
      
      
     
      
      
    
   
    
	
    
	  )
      .catch(error => console.error('Error!', error.message))
  })






    
  function google_response( ) {
   
   element.style.display = "none";
   done_icon.style.display = "block"
   

   window.location.replace("https://wa.me/966544436389") ;
 

   
} 













var form2 = document.forms['myform2']
 
 form2.addEventListener('submit', e => {

   //waitingDialog.show();
   
   
   $(':input[type=submit]').prop('disabled', true)
 $('#today').attr('value', datetime )
 element.style.display = "block"
 //alert("progress")
   e.preventDefault()
   fetch(scriptURL, { method: 'POST', body: new FormData(form)})
     .then(response => 

     
     google_response2()
     
     
    
     
     
   
  
   
   
   
     )
     .catch(error => console.error('Error!', error.message))
 })












function google_response2( ) {
   
   element.style.display = "none";
   done_icon.style.display = "block"
   

   window.location.replace("https://wa.me/966507270572") ;
 

   
} 





var form3 = document.forms['myform3']
 
 form3.addEventListener('submit', e => {

   //waitingDialog.show();
   
   
   $(':input[type=submit]').prop('disabled', true)
 $('#today').attr('value', datetime )
 element.style.display = "block"
 //alert("progress")
   e.preventDefault()
   fetch(scriptURL, { method: 'POST', body: new FormData(form)})
     .then(response => 

     
     google_response3()
     
     
    
     
     
   
  
   
   
   
     )
     .catch(error => console.error('Error!', error.message))
 })



function google_response3( ) {
   
   element.style.display = "none";
   done_icon.style.display = "block"
   

   window.location.replace("https://maps.app.goo.gl/rRnDu4aXYWLr4CeKA?g_st=iw") ;
 

   
} 




	
});










			












    </script>
</body>
</html>


<style>


.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}


/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
 
</style>
