<?php
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
إضافة صورة للقسم المحدد
                        <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    
                      //  $department_id=mysqli_real_escape_string($con,$_GET['id']);
                        $department_id =$_SESSION['id'];
                      $query="SELECT * FROM department WHERE department_id='$department_id' ";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $dep=mysqli_fetch_array($query_run);
                            ?>

                            <form action="index_images.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="id" value="<?=$department_id?>"/>

                                <h5><label> اسم القسم </label> </h5> 
                                <span class="form-control"> <?php echo $dep['dep_name'];?> </span>

                                <div class="mb-4">
                                  <h5>  <label> اختر صورة   </label> </h5>
                                    <input class="form-control" type="file" required=" " name="dep_image" accept=".jpg,.jpeg,.png"/>
                                </div>


                                <div class="mb-4">
                                <h5>  <label> مفعل  </label> </h5>
                                    <input class="form-check" type="checkbox" name="block" value="1"/>
                                </div>


                                <div class="mb-4">
                                    <button name="save" type="submit" class="btn btn-primary" > موافق  </button>
                                </div>
                            </form>
                        <?php
                        }
                        else{
                            echo("<h4> No Such ID Found</h4>");
                        }
                                ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

require "../config/footer.php";

?>