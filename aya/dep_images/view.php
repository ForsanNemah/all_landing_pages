<?php
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
عرض صور القسم
                        <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>اسم القسم </th>
                            <th>الصورة </th>
                            <th>مفعل </th>
                            <th>تعديل </th>
                            <th>حذف </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_GET['id'])){
                        $dep_id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT dep_image.id , dep_image.department_id,department.dep_name, dep_image.dep_image, dep_image.block FROM department , dep_image
                                            where department.department_id= dep_image.department_id AND dep_image.department_id='$dep_id'";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        $department=mysqli_fetch_array($query_run);
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>
                            <td> <?= $row["id"]?></td>
                            <td> <?= $row["dep_name"]?></td>
                            <td> <img src="../img/<?php echo$row['dep_image']; ?>" class="card" width="150" height="150" alt="Department Image"/> </td>
                            <td><?= $row["block"]?></td>

                            <td>
                                <a href="update_images.php?id=<?=$row['id']; ?>"  class="btn btn-info "> تعديل </a>
                            </td>
                             <td>
                                <a href="delete_image.php?id=<?=$row['id']; ?>"  class="btn btn-danger"> حذف  </a>
                            </td>
                            <?php
                            }
                            }
                            else
                            {
                                echo("<h5> لا يوجد سجلات </h5>");
                            }
                            }
                            ?>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

<?php

require "../config/footer.php";

?>