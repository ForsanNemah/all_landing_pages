<!--حذف القسم المحدد -->
<?php
session_start();
include "../config/connection.php";
require "../config/head.php";
?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        حذف بيانات القسم
                        <a href="department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $department_id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT * FROM department WHERE department_id='$department_id' ";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $dep=mysqli_fetch_array($query_run);
                            ?>

                            <form action="index_dep.php" method="post">
                                <input type="hidden" name="id" value="<?=$dep['department_id'];?>"/>

                                <div class="mb-5">
                                    <label> الاسم </label>
                                    <input class="form-control" type="text" name="dep_name" value="<?=$dep['dep_name'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <button name="delete" type="submit" class="btn btn-danger" > حذف بيانات القسم </button>
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