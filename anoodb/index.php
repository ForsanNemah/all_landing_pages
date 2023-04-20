
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
        /* WhatsApp Button 
        
        
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
        
        
        
        
        */

        
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

snaptr('init', '351f9738-9852-4df8-bd6c-789fd1763e0d', {
'user_email': '__INSERT_USER_EMAIL__'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->
 







</head>
<body>
  


<?php

include 'cta/insta.php';

?>


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












 




















                                    <div class="form-group" dir="rtl">
                                        <input name="name" type="text" class="form-control" placeholder="الاسم" required>
                                    </div>

                                    <div class="form-group" dir="rtl">
                                        <input name="phn" id="phn_id" type="number" class="form-control" placeholder="رقم الهاتف" required>
                                    </div>




                                    <div class="form-group" hidden>
                                        <input name="source" type="text" class="form-control"    value="<?php
           require('info.php');
//echo "wwe";
 
echo  $ad_source;

?>">
                                    </div>






<!--

                                    <div class="form-group " dir="rtl">
                                        <select name="type" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                        <?php

include 'info.php';




foreach ($items as $key => $value) {

echo "<option value='$value'>$value</option>";

}
?>




                                        </select>
                                    </div>



-->

                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="datetime" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


<div class="form-group" hidden>
                                        <input name="w_link" id="w_link_id" type="text" class="form-control"   >
                                    </div>



                                    <button id="send" type="submit" class="btn submit-btn">اضغطي  للحجز</button>
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
                    <a class="btn btn-primary" style="background-color: #1c3c49 " href="#form">  احجزي الان </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="page-footer font-small blue">









    <div class="footer-copyright text-center py-3">     
 
 

 
 
 
 <a href="https://instagram.com/anood_beautycenter?r=nametag">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
   <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
 </svg>
 </a>
 
 
 
 <a href="https://www.snapchat.com/add/anood_beauty">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
   <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
 </svg>
 </a>
 
 
 
 
 
 <a href="https://goo.gl/maps/6z74uMYxSv6P4PfYA">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
</svg>
 </a>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
 </div>
 <!-- Copyright -->



















    <div class="footer-copyright text-center py-3">     
 
</div>
<!-- Copyright -->
 

<div class="footer-copyright text-center py-3">    جميع الحقوق محفوظة
     <br>
     <br>
     <br>
     <br>
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
                $("#cta_whatsapp").load("cta/cta_whatsapp.php"); 
           // $("#cta_call").load("cta/cta_call.php"); 
               // $("#slider3").load("slider3.php"); 
                
               // $("#includedContent").load("form_name_phn.php"); 
                // $("#includedContent").load("form_only_whatsapp.php"); 
				
                //$("#count_down_counter").load("count_down.php");
                //$("#tabel_1").load("tabel_1.php"); 
 
    

      const scriptURL = action_url
  const form = document.forms['myform']
 
  form.addEventListener('submit', e => {

    //waitingDialog.show();
    
    
	$(':input[type=submit]').prop('disabled', true)
  $('#today').attr('value', datetime )
  $('#w_link_id').attr('value', 'wa.me/'+$("#phn_id").val() )
  element.style.display = "block"
  //alert("progress")
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => 
 
      
      google_response()
      
      
     
      
      
    
   
    
	
    
	  )
      .catch(error => console.error('Error!', error.message))
  })


    
  function google_response() {
   
   element.style.display = "none";
   done_icon.style.display = "block"
    
   window.location.replace("https://wa.me/"+phn) ;
   
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
