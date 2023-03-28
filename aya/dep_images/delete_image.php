<!--حذف  بيانات الصورة المحددة -->
<?php
session_start();
include "../config/connection.php";
include "../config/header.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
حذف الصورة
                    </h4>
                    <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
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
                            <form action="index_images.php" method="post">
                                <input type="hidden" name="id" value="<?=$dep['id'];?>"/>
                                <div class="mb-5">
                                    <label> القسم  </label>
                                    <input class="form-control" type="text" name="dep_name" value="<?=$dep['dep_name'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <label> الصورة  </label>
                                    <img src="../images/<?php echo $dep['dep_image']; ?>" class="card" width="150" height="150" alt="Department Image"/>
                                </div>


                                <div class="mb-5">
                                    <button name="delete" type="submit" class="btn btn-primary" > Delete Image</button>
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
