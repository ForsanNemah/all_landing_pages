<!--تعديل بيانات الادمن المحدد -->
<?php
session_start();
include "../config/connection.php";
include "../config/head.php";

?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
تعديل بيانات أدمن
                        <a href="admin.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
            <?php
if(isset($_GET['id'])){
    $admin_id=mysqli_real_escape_string($con,$_GET['id']);
    $query="SELECT * FROM admins WHERE id='$admin_id' ";
$query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)> 0){
        $admin=mysqli_fetch_array($query_run);
        ?>
          <form action="index.php" method="post">
              <input type="hidden" name="id" value="<?=$admin['id'];?>"/>

                        <div class="mb-4">
                        <h5>   <label> الاسم باللغة العربية </label> </h5>
                            <input required="" class="form-control" type="text" name="ad_name" value="<?=$admin['ad_name'];?>"/>
                        </div>

                        <div class="mb-4">
                          <h5>  <label> الاسم باللغة الانجليزية </label> </h5>
                            <input  required="" class="form-control" type="text" name="ad_name_en" value="<?=$admin['ad_name_en'];?>"/>
                        </div>

                        <div class="mb-4">
                        <h5> <label>    البريد الإلكتروني  </label> </h5>
                            <input  required="" class="form-control" type="email" name="email" value="<?=$admin['email'];?>"/>
                        </div>

              <div class="mb-4">
              <h5> <label>   كلمة المرور  </label> </h5>
                  <input class="form" type="text" name="pass" required="" value="<?=$admin['password'];?>"/>

                  <h5> <label>  تأكيد كلمة المرور  </label> </h5>
                  <input class="form" type="password" required="" name="confirm_pass"/>
              </div>


              <div class="mb-4">
              <h5>   <label> مفعل  </label> </h5>                  
              <?php 
              
              if($admin['block']==1)
              {
                ?>                  
                 <input class="form-check" type="checkbox" name="block" checked="true" value="1"/>
              <?php
              }
              else 
              {
              ?>
                 <input class="form-check" type="checkbox" name="block" value="1"/>
               <?php
              }
                ?>
              
                        </div>

                        <div class="mb-4">
                            <button name="update" type="submit" class="btn btn-primary " > حفظ التعديل </button>
                        </div>
                    </form>
               <?php
    }
    else{

        echo("<h4> No Such ID Found</h4>");
    }
}              ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "../config/footer.php";
?>

