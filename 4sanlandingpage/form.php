<section id="appointment" class="st-shape-wrap st-gray-bg">
      <div class="st-shape4">
        <img src="assets/img/shape/section_shape.png" alt="shape1">
      </div>
      <div class="st-shape6">
        <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">احجز موعد الان </h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <div class="st-section-heading-subtitle">
      سجل بيانتك وسيتم التواصل معك في  اقل من 24 ساعة
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method="POST" action="assets/php/appointment.php" class="st-appointment-form form-bg" id="appointment-form">
              <div id="st-alert1"></div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>الاسم</label>
                    <input type="text" id="uname" name="uname" placeholder="نورا حسن" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>رقم الجوال</label>
                    <input type="text" id="uemail" name="uemail" placeholder="555444333" required>
                  </div>
                </div>
                

               

<?php

include "services_select.php";
?>



               
                
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>معلومات اضافية</label>
                    <textarea cols="30" rows="10" id="umsg" name="umsg"
                      placeholder="اكتب شيئا هنا"></textarea>
                  </div>
                </div>
                
                <div class="col-lg-12">


              
      
   


               
                  <button class="st-btn st-style1 st-color1 st-size-medium mybutton" type="submit" id=""
                    name="submit">حجز</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>