<!--تعديل بيانات الصورة المحددة -->
<?php

include "../config/connection.php";
include "../config/head.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <?php 
   $id=$_SESSION['id'];

   $query="SELECT dep_name FROM department 
                       where department_id='$id'";
   $query_run=mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)> 0){
    while($row = mysqli_fetch_assoc($query_run)) {
?>
تعديل صور القسم <span style="color:#2eca6a"> <?php echo $row['dep_name']?>  </span>
<?php }
}?>                    <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
                </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT dep_image.id , dep_image.department_id,department.dep_name, dep_image.dep_image, dep_image.block FROM department , dep_image
                                            where department.department_id= dep_image.department_id AND dep_image.id='$id'";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $dep=mysqli_fetch_array($query_run);
                            ?>
                            <form action="index_images.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$dep['id'];?>"/>

                                <div class="mb-4">
                                   <h5> <label> القسم  </label>  </h5>
                                   <span class="form-control" > <?php echo $dep['dep_name'];?> </span>
                                </div>
                                <div class="mb-4">
                                   <h5>  <label> الصورة  </label> </h5>
                                   <img src="../img/<?php echo $dep['dep_image']; ?>" class="card" width="150" height="150" alt="Department Image"/>
                                </div>

                                <div class="mb-4">
                                <h5>  <label> اختر صورة   </label> </h5>
                                    <input class="form-control" type="file" name="dep_image"   accept=".jpg,.jpeg,.png"/>
                                <input type="hidden"  value="<?=$dep['dep_image'];?>" name="image_name" >
                                </div>
                                <div class="mb-4">
                                   <h5> <label> مفعل  </label> </h5>
                                   <?php 
              
              if($dep['block']==1)
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
                ?>                                </div>
                                <div class="mb-4">
                                    <button name="update" type="submit" class="btn btn-primary" > حفظ التعديل </button>
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
