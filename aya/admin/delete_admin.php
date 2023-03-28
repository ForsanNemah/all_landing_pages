<!--عرض بيانات الادمن المراد حذفة وتأكيد الحذف -->
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
حذف سجل الادمن
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

                                <div class="mb-5">
                                    <label> الاسم </label>
                                    <input class="form-control" type="text" name="ad_name" value="<?=$admin['ad_name'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <label> البريد الالكتروني </label>

                                    <input class="form-control" type="email" name="email" value="<?=$admin['email'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <button name="delete" type="submit" class="btn btn-primary" > حذف </button>
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

