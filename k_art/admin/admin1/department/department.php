<!--عرض الاقسام -->
<?php
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
                            <th> اسم القسم باللغة الإنجليزية  </th>
                            <th>رابط الفيديو   </th>

                            <th> مفعل  </th>
                            <th>تعديل</th>
                            <th>حذف  </th>
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
                            <td> <?= $row["dep_name_en"]?></td>
                            <td> <?= $row["video_url"]?></td>
             
                             
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
                                <!--تعديل بيانات القسم المحدد -->
                                <a href="update_dep.php?id=<?=$row['department_id']; ?>"  class="btn btn-success ">تعديل </a>
                            </td>
                            <td>
                                <!--حذف القسم المحدد -->
                           <a href="delete_dep.php?id=<?=$row['department_id']; ?>"  class="btn btn-danger ">حذف  </a>
                            </td>

                            <td>
                                        <!--عرض صور  القسم المحدد -->
                                <a href="view.php?id=<?=$row['department_id']; ?>"  class="btn btn-primary ">عرض  </a>
                                
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