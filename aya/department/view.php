<?php
include "../config/connection.php";
include "../config/header.php";
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
عرض الأقسام
                        <a href="department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>اسم القسم </th>
                            <th>الرابط </th>
                            <th>مفعل </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_GET['id'])){
                        $dep_id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT dep_url.id , dep_url.department_id,department.dep_name, dep_url.url, dep_url.block FROM department , dep_url
                                            where department.department_id= dep_url.department_id AND dep_url.department_id ='$dep_id'";


                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                        $department=mysqli_fetch_array($query_run);
                        while($row = mysqli_fetch_assoc($query_run)) {
                        ?> <tr>
                            <td> <?= $row["department_id"]?></td>
                            <td> <?= $row["dep_name"]?></td>
                            <td> <?= $row["url"]?></td>
                            <td><?= $row["block"]?></td>
                            <td>
                                <a href="../url/add_url.php?id=<?=$row['department_id']; ?>"  class="btn btn-info btn-sm">إضافة رابط  </a>
                                <a href="../dep_images/add_images.php?id=<?=$row['department_id']; ?>"  class="btn btn-info btn-sm">إضافة صورة   </a>


                                <form action="index_dep.php" method="post" class="d-inline">
                                    <button type="submit" name="delete" value="<?=$row['id']; ?>" class="btn btn-danger btn-sm">Delete</button>

                                </form>

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