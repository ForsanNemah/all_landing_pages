<!--عرض الاقسام -->
<?php
session_start();
require "../config/connection.php";
require "../config/header.php";
?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                       عرض الأقسام
                        <a href="insert_dep.php" style="margin-left: 7px" class="btn btn-outline-info float-lg-start">إضافة</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th> اسم القسم </th>
                            <th> مفعل  </th>
                            <th>تعديل</th>
                            <th>حذف  </th>
                            <th>الروابط </th>
                            <th>الصور </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query="select * from department";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>

                            <td> <?= $row["department_id"]?></td>
                            <td> <?= $row["dep_name"]?></td>
                            <td> <?= $row["block"]?></td>
<!--                            <td><?/*= $row["block"]*/?></td>
-->                            <td>
                                <!--تعديل بيانات القسم المحدد -->
                                <a href="update_dep.php?id=<?=$row['department_id']; ?>"  class="btn btn-success ">تعديل </a>
                            </td>
                            <td>
                                <!--حذف القسم المحدد -->
                           <a href="delete_dep.php?id=<?=$row['department_id']; ?>"  class="btn btn-danger ">حذف  </a>
                            </td>
                            <td>
                                <!--إضافة رابط للقسم المحدد -->
                                <a href="../url/add_url.php?id=<?=$row['department_id']; ?>"  class="btn btn-outline-info"> إضافة  </a>
                                <!--عرض روابط القسم المحدد -->
                                <a href="../url/show_dep_urls.php?id=<?=$row['department_id']; ?>"  class="btn btn-primary ">عرض  </a>
                            </td>

                            <td>
                                <!--إضافة صورة للقسم المحدد -->
                                <a href="../dep_images/add_images.php?id=<?=$row['department_id']; ?>"  class="btn btn-outline-info "> إضافة  </a>
                                        <!--عرض صور  القسم المحدد -->
                                <a href="../dep_images/view.php?id=<?=$row['department_id']; ?>"  class="btn btn-primary ">عرض  </a>
                            </td>
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