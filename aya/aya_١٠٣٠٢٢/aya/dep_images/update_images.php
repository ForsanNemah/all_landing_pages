<!--تعديل بيانات الصورة المحددة -->
<?php
session_start();
include "../config/connection.php";
include "../config/head.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                    تعديل صورة القسم
                    <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
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
                                   <img src="../images/<?php echo $dep['dep_image']; ?>" class="card" width="150" height="150" alt="Department Image"/>
                                </div>

                                <div class="mb-4">
                                <h5>  <label> اختر صورة   </label> </h5>
                                    <input class="form-control" type="file" name="dep_image"/>
                                </div>
                                <div class="mb-4">
                                   <h5> <label> مفعل  </label> </h5>
                                    <input class="form-check" type="checkbox" name="block" value="1"/>
                                </div>
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
