<!--عرض جميع الادمن -->
<?php
require "../config/connection.php";
require "../config/head.php";
?>

<div class="container mt-5 ">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">

            
                <div class="card-header">
                    <h4>
                        عرض الادمن

                        <a href="insert.php" class="btn btn-outline-info float-lg-start ">إضافة</a>
                    </h4>
                </div>
                <div class="card-body">
<table class="table table-bordered table-striped ">
    <thead>
    <tr>
        <th>الرقم </th>
        <th>اسم الادمن  </th>
        <th>  اسم الادمن بالانجليزية  </th>
        <th>البريد الإلكتروني </th>
        <th>كلمة المرور  </th>
        <th>مفعل </th>
        <th>تعديل </th>
        <th>حذف </th>

    </tr>
    </thead>
    <tbody>
    <?php
    $query="select * from admins";
    $query_run=mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)> 0){
        while($row = mysqli_fetch_assoc($query_run)) {
    ?> <tr>

        <td> <?= $row["id"]?></td>
        <td> <?= $row["ad_name"]?></td>
        <td> <?= $row["ad_name_en"]?></td>

        <td> <?= $row["email"]?></td>
        <td> <?= $row["password"]?></td>

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
              <a href="update.php?id=<?=$row['id']; ?>"  class="btn btn-success ">تعديل </a>
        </td>
        <td>
            <a href="delete_admin.php?id=<?=$row['id']; ?>"  class="btn btn-danger ">حذف  </a>
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