
<?php
 
include('info.php');
 
?>





<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <br>
              <br>
              <h1 class="title-single" >اتصل بنا </h1>
              <span class="color-text-a">
                
              دعونا نكتب قصة ناجحة معاً ! 
            
            
            
            
            
            </span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->


















<section class="contact">
      <div class="container">
        <div class="row">


          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14291.347083491857!2d50.1073002!3d26.4287436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fbf6d1ee28b3%3A0x380f7270c48f240a!2sKhalid%20Art!5e0!3m2!1sar!2ssa!4v1679364250378!5m2!1sar!2ssa" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

 
              </div>
            </div>
          </div>



          
              <div class="col-md-7" id="contact_slide">
          <div class="col-sm-12 section-t8" >
            <div class="row">

                <form   method="post" action="site_1/phpmailer/my.php" role="form" >
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="ادخل الاسم " required>
                      </div>
                    </div>


                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="phn" type="number" class="form-control form-control-lg form-control-a" placeholder="ادخل رقم الهاتف " required>
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="ادخل البريد الالكتروني " >
                      </div>
                    </div>

                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="الموضوع " required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="الرسالة " required></textarea>
                      </div>
                    </div>
                     

                    <div class="col-md-12 text-center">
                      <br>
                      <button type="submit" name="save" class="btn btn-a">ارسل الرساله </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">قل مرحباً </h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">الإيميل .
                        <span class="color-a"><?php echo $web_site_email ?></span>
                      </p>
                      <p class="mb-1">الهاتف.
                        <span class="color-a"><?php echo $web_site_phn ?></span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">تجدنا في </h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        شارع فهد، ال " ادمه ، الدمام 32242"
                        <br> 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                 


                




                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 