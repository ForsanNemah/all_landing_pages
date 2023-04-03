<!--إضافة ادمن جديد -->
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
                     إضافة أدمن
                        <a href="admin.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">

                        <div class="mb-5">
                            <label> الاسم </label>
                            <input class="form-control" type="text" name="ad_name"/>
                        </div>

                        <div class="mb-5">
                            <label> البريد الالكتروني </label>
                            <input class="form-control" type="email" name="email"/>
                        </div>

                        <div class="mb-5">
                            <label> كلمة المرور  </label>
                            <input class="form" type="password" name="pass"/>

                            <label> تأكيد كلمة المرور   </label>
                            <input class="form" type="password" name="confirm_pass"/>
                        </div>

                        <div class="mb-5">
                            <label> Block </label>
                            <input class="form-check" type="checkbox" name="block" value="1"/>
                        </div>

                        <div class="mb-5">
                           <button name="save" type="submit" class="btn btn-primary" > حــفـظ </button>
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
