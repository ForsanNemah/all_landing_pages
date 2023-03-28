<!--عرض جميع الأقسام والروابط  -->

<?php
session_start();
require "../config/connection.php";
require "../config/header.php";

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        عرض الأقسام والروابط
                    </h4>
                    <a href="../department/department.php" class="btn btn-danger float-lg-start">رجوع</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>اسم القسم  </th>
                            <th>الرابط </th>
                            <th>مفعل </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query="SELECT dep_url.id , dep_url.department_id,department.dep_name, dep_url.url, dep_url.block FROM department , dep_url
                                            where department.department_id= dep_url.department_id";

                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>
                            <td> <?= $row["id"]?></td>
                            <td> <?= $row["dep_name"]?></td>
                            <td> <?= $row["url"]?></td>
                            <td><?= $row["block"]?></td>

                            <?php
                            }
                            }
                            else
                            {
                                echo("<h5> لا يوجد سجلات </h5>");
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
