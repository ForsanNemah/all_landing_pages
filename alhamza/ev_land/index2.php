
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
    <link rel="icon" href="public/image/favicon.png" type="image/gif" sizes="16x16">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Meswak Clinics</title>
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

<script type="text/javascript" src="info.js"></script>
</head>
<body>
  
    <div>
        
    </div>
    <!-- Header -->
    <section class="container-fluid bg-primary head-nav">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="text-center header-logo">
                    <div class="logo">
                         





                        <?php


if ($handle = opendir('logo')) {


    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

 

  
  //echo "$entry\n";
  echo "
  
  
  
  <img   src='logo/$entry' class='img-fluid' alt='Responsive image' width='350px' height='100px' >
  
  
  
  ";
  
  
  break;
 

 
           
        }
    }

    closedir($handle);
}




?>











                        <h3 class="text-light" style="font-size:1.2em!important">أفضل رعاية طبية نقدمها لكم</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Appointment Section -->






   








    <section class=" appointment">
        <div class="appointment-section">
            <div class="container">


            
















                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form">
                            <div class="appointment-form text-center">
                                <form id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off"  name="myform">
                                    <p class="appointment-title text-light">املأ النموذج الآن</p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">واحصل على العرض</p>













                                    <div class="col-xs-4 col-xs-offset-4" id="myloader"  hidden  >
<div class="loader"></div> 
</div>

<div class="col-xs-4 col-xs-offset-4"  id="done_icon" hidden  >
<img src="ads/done.gif" class="img-fluid" alt="Responsive image"   >

</div>




















                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="الاسم" required>
                                    </div>

                                    <div class="form-group">
                                        <input name="phn" type="number" class="form-control" placeholder="رقم الهاتف" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="type" id="servicerb" class="custom-select" aria-label="عرض زراعة الأسنان" required>
                                            <option value="عرض زراعة الأسنان">اختر الخدمة</option>
                                            <option value="عرض زراعة الأسنان">عرض زراعة الأسنان</option>
                                            <option value="عرض إبتسامة هوليود">عرض إبتسامة هوليود</option>
                                            <option value="عرض تركيبات الأسنان">عرض تركيبات الأسنان</option>
                                            <option value="عرض المعالجات">عروض حشوات ومعالجات</option>
                                            <option value="عرض تقويم الاسنان">عرض تقويم الأسنان</option>
                                            <option value="عرض تبييض الاسنان">عرض تبييض الاسنان</option>
                                            <option value="خدمات اخرى">عروض اخرى</option>
                                        </select>
                                    </div>





                                    <div class="form-group"  hidden >
    <label class="sr-only" for="r-form-1-email">date</label>
    <input type="text" name="datetime" id="today" placeholder=" التاريخ  " class="r-form-1-email form-control" id="r-form-1-email"  >
</div>


                                    <button id="send" type="submit" class="btn submit-btn">اضغط للتسجيل</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 passion">
                        <div class="text-center text-lg-right">
                            <h4 class="text-light">
                                عالج اسنانك او جمّلها فابتسامتك ستجعلك تبدو دائما مذهلا
                            </h4>
                            <br />
                            <p class="text-light" style="font-size: 1.2em; font-size: 1.2em; font-family: inherit !important ">تتوفر خدمة التقسيط على دفعات</p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <br>
   <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <a class="btn btn-primary" style="background-color: #1c3c49 " href="#form">  سجل الان </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="">© 2022 <a href="https://wmc-ksa.com/home/" class="copy"> شركة النافذة للتسويق الالكتروني</a>.All rights reserved</p>
                </div>

            </div>
        </div>
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
               // $("#slider1").load("slider1.php"); 
                //$("#slider2").load("slider2.php"); 
               // $("#cta_whatsapp").load("cta/cta_whatsapp.php"); 
             // $("#cta_call").load("cta/cta_call.php"); 
                //$("#slider3").load("slider3.php"); 
                
               // $("#includedContent").load("form_name_phn.php"); 
                // $("#includedContent").load("form_only_whatsapp.php"); 
				
               // $("#count_down_counter").load("count_down.php");
                //$("#tabel_1").load("tabel_1.php"); 
 
    

      const scriptURL = action_url
  const form = document.forms['myform']

  form.addEventListener('submit', e => {

    //waitingDialog.show();
    
  
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


    
	 
	
});









function google_response() {
    $("#myloader").hide();
    $("#done_icon").show();
     
    window.location.replace("https://wa.me/"+phn) ;
    
}
			












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
