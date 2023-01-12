<!DOCTYPE html>
<html lang="ar">

    <head>

 
 


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>


		
			<?php

			include 'info.php';
			
			 echo $info['website_title'];
			
			
			
			
			?>



		</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        
       
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
       
		<script type="text/javascript" src="info.js"></script>
 
   
    








    
 

   

    </head>

    <body  dir="rtl">
		
		<!-- Top menu -->
 
     
    





		<div class="row">
					<div  >



					<img   src="ads/logo.png" class="img-fluid" alt="Responsive image" width="100px" height="100px" >


         
        







						<h2 > 


							<?php

							include 'info.php';
							
							 echo $info['sub1'];
							
							
							
							
							?>



						</h2>
						<div >
							<h3>
								 
							<?php

include 'info.php';

 echo $info['sub2'];




?>



							</h3>

           <div id="count_down_counter">



           </div>
 
<br>


						</div>
					</div>
				</div>













  

       





				
        <!-- Top content -->
        <div class="top-content" >
        	<div class="container"  dir="rtl">
        	
				

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp">
						<div  >

						
							<div >
								<h4>




			 
								<?php

include 'info.php';

 echo $info['form_sub1'];




?>







								</h4>
								<h>



								<?php

include 'info.php';

 echo $info['form_sub2'];




?>



		</h>
							</div>
							 
						</div>


            







            
						<div class="r-form-1-bottom">

            <div class="col-xs-4 col-xs-offset-4" id="myloader" hidden >
<div class="loader"></div> 
</div>

<div class="col-xs-4 col-xs-offset-4"  id="done_icon" hidden>
<img src="ads/done.gif" class="img-fluid" alt="Responsive image"   >

</div>

<br>
<br>
<br>
<br>
            <form id="includedContent" role="form"      method="post" name="myform">

          
     
            </form>
            
       

            


            






							
						</div>
					</div>
				</div>
                
            </div>
        </div>











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
         









			



























		


























	

	 



				 
	          









        <!-- Features -->
        

		<!-- How it works -->
        
        
        <!-- Testimonials -->
       

        <!-- FAQ -->
       
        
        <!-- Footer -->
		<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 جميع الحقوق محفوظة:
  <a href="https://wmc-ksa.com/"> شركة النافذة</a>
</div>
<!-- Copyright -->

</footer>
		 
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
















<script>

 
$(document).ready(function () {





  

//alert($('#if_cd').contentWindow.document.body.offsetHeight + 'px');

//$('#if_cd').height("200" );

/*
$('#if_cd').load(function() {
    this.style.height =
    this.contentWindow.document.body.offsetHeight + 'px';
    alert( this.contentWindow.document.body.offsetHeight + 'px');
    $('#if_cd').height("146" );
});
*/

 






















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


                $("#includedContent").load("form_name_phn_type.php"); 
                $("#slider1").load("slider1.php"); 
               $("#slider2").load("slider2.php"); 
                $("#count_down_counter").load("count_down.php"); 
                //$("#slider3").load("slider3.php"); 
                
               // $("#includedContent").load("form_name_phn.php"); 
                // $("#includedContent").load("form_only_whatsapp.php"); 
				
 
    

      const scriptURL = action_url
  const form = document.forms['myform']

  form.addEventListener('submit', e => {
    
	 
	$(':input[type=submit]').prop('disabled', true)
  $('#today').attr('value', datetime )
  $("#myloader").show()
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => 
 
      
      google_response()
      
      
     
      
      
    
   
    
	
    
	  )
      .catch(error => console.error('Error!', error.message))
  })


    
  function google_response() {
    $("#myloader").hide();
    $("#done_icon").show();
     
    window.location.replace("https://wa.me/"+phn) ;
    
}
				 
	
});























 

</script>


<style>


select {
        height:35px;
        line-height:30px;
        background:#f4f4f4;
        
    } 




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