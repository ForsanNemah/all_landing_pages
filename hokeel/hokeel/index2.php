

   
 <script src="jquery-3.3.1.min.js"></script>


 <script>





$(document).ready(function () {

   // alert(user_id);
    document.getElementById("admin_id").value = user_id;
    
});
 </script>

<!DOCTYPE html>
<!-- saved from url=(0051)https://royaljubail.everestsoftjo.com/whatsapp.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="title" content="">
    <meta property="description" content=" ">
    <meta property="url" content=" ">
    <meta property="site_name" content=" ">
    <meta property="og:type" content="">
    <meta property="og:title" content=" ">
    <meta property="og:description" content=" ">
    <meta property="og:url" content=" ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta property="og:site_name" content=" ">
    <link rel="stylesheet" href="./index2_files/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./index2_files/style.css">
    <link rel="stylesheet" href="./index2_files/slick.min.css">
    <link rel="stylesheet" href="./index2_files/slick-theme.min.css">
    <link rel="stylesheet" href="./index2_files/font-awesome.min.css">
    <link rel="stylesheet" href="./index2_files/font-awesome.min(1).css">
    <link rel="icon" href="https://royaljubail.everestsoftjo.com/public/image/favicon.png" type="image/gif" sizes="16x16">
    <script type="text/javascript" async="" src="./index2_files/events.js.download"></script><script type="text/javascript" async="" src="./index2_files/analytics.js.download"></script><script type="text/javascript" async="" src="./index2_files/scevent.min.js.download"></script><script async="" src="./index2_files/gtm.js.download"></script><script src="./index2_files/jquery.min.js.download"></script>
     <script type="text/javascript" src="info.js">
       
    <title>
    
    
    
    <?php

include 'info.php';

 echo $info['website_title'];




?>
    
    
    
    
    </title>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W3FBVZL');</script>
    <!-- End Google Tag Manager -->
   
</head>
<body>
 
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3FBVZL"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <section class="container-fluid bg-white head-nav">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="text-center header-logo">
                    <div class="logo">
                        <img src="./ads/logo.png" alt="logo">
                        <h3 class="text-dark" style="font-size:1.2em!important"> 
                    
                    
                    
                        <?php

include 'info.php';

 echo $info['nav_h'];




?>
                    
                    
                    </h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Appointment Section -->
    <section class=" appointment">
        <div class="section">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form">
                            <div class=" text-center">
                                
                               
                                </h>
                                <form name="myform" target="_self" onsubmit="   doSomething();" action="register.php"   method="post">
                                    
                                    <br>
                                    <br>
                                    <p class=" text-light"  > 
                                    
                                    
                                  
                                    <?php

include 'info.php';

 echo $info['fill_the_form_to'];




?>
                                    
                                    
                                    <b style="color: #40c351;background-color:aliceblue ">عبر واتس اب</b></p>
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="الاسم" required="">
                                    </div>

                                    <div class="form-group">
                                        <input name="phn" type="number" class="form-control" placeholder="رقم الهاتف" required="">
                                    </div>
                                    <div class="form-group">
                                    <div class="form-group">
                                        <input name="admin_id" id="admin_id"  type="hidden"   class="form-control" placeholder="رقم الهاتف"  >
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="type" id="servicerb" class="custom-select" aria-label="عرض زراعة الأسنان" required="true">
                                          







                                        <?php

include 'info.php';

 


foreach ($items as $key => $value) {

    echo "<option value='$value'>$value</option>";
     
   }
?>
      











                                        </select>
                                    </div>
                                    <button id="send" type="submit" class="btn submit-btn" style="background-color: #25D366"> <i >


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                          </svg>
        


                                    </i> احجز  عبر واتس اب </button>
                                </form>

                          
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 passion">
                        <div class="text-center text-lg-right">
                            <h1 class="text-light">
                               
                            







              
                            <?php

include 'info.php';

 echo $info['index2_header_h'];




?>
    




                            </h1>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="">© 2022 <a  class="copy"></a>.All rights reserved</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="js/main.js"></script> -->
    <script src="./index2_files/slick.min.js.download"></script>
    <script src="./index2_files/custom.js.download"></script>




 
    <script>


    //alert("wwe");
        //alert(msg);

        function hidebutton() {
            $("#stickybutton").hide();
        }

        function postToGoogle() {
       
            var field1 = $("#nameField").val();
            var field2 = $("#mobField").val();
            var field3 = 'Royal';
            var field4 = $("#servicerb").val();

            if (field1 == "") {
                alert('الرجاء تعبئة الاسم');
                document.getElementById("nameField").focus();
                return false;
            }

            if (field2 == "") {
                alert('الرجاء تعبئة رقم الهاتف');
                document.getElementById("mobField").focus();
                return false;
            }

            $.ajax({
                url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdv2kTTjQYhOAroS6aUstAcVTwdQyZ-6acPBl9vGOVXjXW9ig/formResponse?",
                data: { "entry.1696771238": field1, "entry.733507144": field2, "entry.1202769131": field4 },
                type: "POST",
                dataType: "xml",
                success: function (d) {
                },
                error: function (x, y, z) {

                    window.location.replace("https://wa.me/9665500064465");

                }
            });
            return false;
        }



        $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});








$('#myform').submit(function() {
    this.submit();
    disableFields(); // your own function
    return false;
});


function doSomething() {
   alert(msg);
    
 window.open("https://wa.me/"+phn);


   //window.open(<?php echo "ttps://wa.me/966581536666"; ?>);



    return false;
}
    </script>



	<script type="text/javascript" id="">!function(d,g,e){d.TiktokAnalyticsObject=e;var a=d[e]=d[e]||[];a.methods="page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");a.setAndDefer=function(b,c){b[c]=function(){b.push([c].concat(Array.prototype.slice.call(arguments,0)))}};for(d=0;d<a.methods.length;d++)a.setAndDefer(a,a.methods[d]);a.instance=function(b){b=a._i[b]||[];for(var c=0;c<a.methods.length;c++)a.setAndDefer(b,a.methods[c]);return b};a.load=function(b,c){var f="https://analytics.tiktok.com/i18n/pixel/events.js";
a._i=a._i||{};a._i[b]=[];a._i[b]._u=f;a._t=a._t||{};a._t[b]=+new Date;a._o=a._o||{};a._o[b]=c||{};c=document.createElement("script");c.type="text/javascript";c.async=!0;c.src=f+"?sdkid\x3d"+b+"\x26lib\x3d"+e;b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(c,b)};a.load("CDQU6FJC77U1DP3CADCG");a.page()}(window,document,"ttq");</script>
	</body></html>


    <style>

        .section{
          background-image: url("ads/back-image.jpg");
        }
        
        
            </style>


            <script>
       
        </script>