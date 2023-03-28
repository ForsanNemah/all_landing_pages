<!--إضافة رابط للقسم المحدد -->
<?php
session_start();
include "../config/connection.php";
include "../config/header.php";
?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
إضافة رابط للقسم
                        <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
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
                            <form action="index_url.php" method="post">
                                <input type="hidden" name="id" value="<?=$dep['department_id'];?>"/>


                                <label> اسم القسم </label>
                                <input type="text" name="name" value="<?=$dep['dep_name'];?>" class="col-form-label"/>

                                <div class="mb-5">
                                    <label> الرابط  </label>
                                    <input class="form-control" type="text" name="url"/>
                                </div>

                                <div class="mb-5">
                                    <label> Block </label>
                                    <input class="form-check" type="checkbox" name="block" value="1"/>
                                </div>

                                <div class="mb-5">
                                    <button name="save" type="submit" class="btn btn-primary" > حفظ الرابط  </button>
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