<!--تعديل المشروع المحدد -->
<?php
session_start();
include "../config/connection.php";
require "../config/head.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
تعديل بيانات المشروع
                        <a href="projects.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT * FROM projects WHERE id='$id' ";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $pro=mysqli_fetch_array($query_run);
                            ?>
                            <form action="index_project.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$pro['id'];?>"/>

                                <div class="mb-5">
                                <h5>  <label> اسم المشروع باللغة العربية   </label> </h5>
                                    <input class="form-control" type="text" name="name" value="<?=$pro['project_name'];?>"/>
                                </div>

                                <div class="mb-5">
                                    <h5> <label> اسم المشروع باللغة الإنجليزية   </label> </h5>
                                    <input class="form-control" type="text" name="name_en" value="<?=$pro['project_name_en'];?>"/>
                                </div>

                                 <div class="mb-5">
                                 <h5>  <label> الملف  </label> </h5>
                                    <input class="form-control" type="file" name="project_url"/>
                                </div>

                                <div class="mb-5">
                                <h5>   <label> مفعل  </label> </h5>
                                    <input class="form-check" type="checkbox" name="block" value="1"/>
                                </div>

                                <div class="mb-5">
                                    <button name="update" type="submit" class="btn btn-primary" > حــفـظ الـتعـديـل </button>
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