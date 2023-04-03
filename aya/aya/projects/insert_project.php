<?php
session_start();
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
                        </h4>
                    </div>
                    <div class="card-body">

                                <form action="index_project.php" method="post" enctype="multipart/form-data">

                                    <div class="mb-5">
                                        <label> اسم المشروع  </label>
                                        <input type="text" class="form-control" name="name"  class="col-form-label"/>

                                    </div>


                                    <div class="mb-5">
                                        <label> اختر الملف    </label>
                                        <input class="form-control" type="file" name="project_url"/>
                                    </div>


                                    <div class="mb-5">
                                        <label> Block </label>
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