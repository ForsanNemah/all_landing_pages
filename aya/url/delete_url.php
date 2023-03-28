<!--حذف الرابط المحدد -->

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
حــذف الــرابــط
                        <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT dep_url.id , dep_url.department_id,department.dep_name, dep_url.url, dep_url.block FROM department , dep_url
                                where department.department_id= dep_url.department_id AND dep_url.id ='$id'";

                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $dep=mysqli_fetch_array($query_run);
                            ?>
                            <form action="index_url.php" method="post">
                                <input type="hidden" name="id" value="<?=$dep['id'];?>"/>

                                <div class="mb-5">
                                    <label> القسم  </label>
                                    <input class="form-control" type="text" name="dep_name" value="<?=$dep['dep_name'];?>"/>
                                </div>

                                 <div class="mb-5">
                                    <label> الرابط   </label>
                                    <input class="form-control" type="text" name="dep_name" value="<?=$dep['url'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <button name="delete" type="submit" class="btn btn-danger" > حـذف الـرابـط </button>
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