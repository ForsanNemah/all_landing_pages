<!--إضافة مشروع  جديد -->
<?php
include "../config/connection.php";
include "../config/head.php";
?>
    <div class="container mt-5">
        <?php include('../config/message.php'); ?>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>
إضافة مشروع جديد
<a href="projects.php" class="btn btn-danger float-lg-start">رجوع</a>
                
</h4>
                    </div>
                    <div class="card-body">

                                <form action="index_project.php" method="post" enctype="multipart/form-data">

                                    <div class="mb-5">
                                       <h5> <label> اسم المشروع باللغة العربية  </label> </h5>
                                        <input type="text" class="form-control" required="" name="name"  class="col-form-label"/>

                                    </div>

                                    <div class="mb-5">
                                      <h5>  <label> اسم المشروع باللغة الانجليزية  </label> </h5>
                                        <input type="text" class="form-control" required="" name="name_en"  class="col-form-label"/>

                                    </div>

                                    <div class="mb-5">
                                       <h5>  <label> اختر الملف    </label></h5>
                                        <input class="form-control" type="file" required="" name="project_url" accept=".pdf,.xlsx"/>
                                    </div>
                                    <div class="mb-5">
                                        <label> مفعل  </label>
                                        <input class="form-check" type="checkbox" name="block" value="1"/>
                                    </div>


                                    <div class="mb-5">
                                        <button name="save" type="submit" class="btn btn-primary" > حــفـظ   </button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require "../config/footer.php";

?>