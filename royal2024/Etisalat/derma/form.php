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

          

          <div class="st-section-heading-subtitle pulsate">
      سجل بيانتك وسيتم التواصل معك في  اقل من 24 ساعة
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form onsubmit="myFunction()"  method="POST" action="post_to_google_sheet.php" class="st-appointment-form form-bg" id="appointment-form">
              <div id="st-alert1"></div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>الاسم</label>
                    <input type="text"  name="name" placeholder="نورا حسن" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>رقم الجوال</label>
                    <input type="number"  name="phone" placeholder="555444333" required>
                  </div>
                </div>


                <input hidden type="number"   name="is_w_app" value="0" >
                

               

<?php

include "services_select.php";
?>



               
               
                
                <div class="col-lg-12">


              
      
   


               
                  <button id="save_button_one" class="st-btn st-style1 st-color1 st-size-medium mybutton" type="submit" id=""
                    name="submit">حجز</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>











    <script>
function myFunction() {
  //alert("The form was submitted");
  
   


  document.getElementById('save_button_one').innerText = 'يرجى الإنتضار سيتم تحويلك الان';
}
</script>



