<!--عرض المشاريع -->
<?php
session_start();
require "../config/connection.php";
require "../config/head.php";
?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                       عرض المشاريع 
                        <a href="insert_project.php" style="margin-left: 7px" class="btn btn-outline-info float-lg-start">إضافة</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th> المشروع   </th>
                            <th> اسم المشروع باللغة الانجليزية    </th>
                            <th> مفعل  </th>
                            <th>تعديل</th>
                            <th>حذف  </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query="select * from projects";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>

                            <td> <?= $row["id"]?></td>
                            <td> <?= $row["project_name"]?></td>
                            <td> <?= $row["project_name_en"]?></td>
                                <?php 
                              if(($row["block"]) ==1) 
                                {?>
                                     <td> مفعل </td>
                                         <?php 
                                }
                               else
                                {?>
                                    <td> غير مفعل  </td>
                                         <?php 
                                 }
                                    ?>
                            <td>
                                <!--تعديل بيانات المشروع المحدد -->
                                <a href="update_project.php?id=<?=$row['id']; ?>"  class="btn btn-success ">تعديل </a>
                            </td>
                            <td>
                                <!--حذف المشروع المحدد -->
                           <a href="delete_project.php?id=<?=$row['id']; ?>"  class="btn btn-danger ">حذف  </a>
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