<!--عرض جميع الاقسام والصور -->
<?php
include "../config/connection.php";
include "../config/head.php";
?>
<body dir="rtl">
<div class="container mt-5">

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
عرض جميع الاقسام والصور
                        <a href="../department/department.php" style="margin-right:7px " class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>اسم القسم </th>
                            <th>الصور </th>
                            <th>مفعل </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query="SELECT dep_image.id , dep_image.department_id,department.dep_name, dep_image.dep_image, dep_image.block FROM department , dep_image
                                            where department.department_id= dep_image.department_id";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        $department=mysqli_fetch_array($query_run);
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>
                            <td> <?= $row["department_id"]?></td>
                            <td> <?= $row["dep_name"]?></td>
                           <td> <img src="../img/<?php echo$row['dep_image']; ?>" class="card" width="150" height="150" alt="Department Image"/> </td>
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
</body>
<?php
require "../config/footer.php";

?>
