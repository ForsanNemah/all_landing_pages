<!--إضافة ادمن جديد -->
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
                     إضافة أدمن
                        <a href="admin.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">

                        <div class="mb-4">
                        <h5> <label> الاسم باللغة العربية </label> </h5>
                            <input class="form-control" required="" type="text" name="ad_name"/>
                        </div>
                        <div class="mb-4">
                           <h5> <label> الاسم باللغة الانجليزية </label> </h5>
                            <input class="form-control" type="text" required="" name="ad_name_en"/>
                        </div>
                        <div class="mb-4">
                        <h5> <label> البريد الالكتروني   </label>  </h5>
                            <input class="form-control" type="email" required="" name="email"/>
                        </div>

                        <div class="mb-4">
                           <h5> <label> كلمة المرور  </label> </h5>
                            <input class="form" type="password" required="" name="pass"/> 
                            <h5> <label>  تأكيد كلمة المرور  </label> </h5>
                            <input class="form" type="password" required="" name="confirm_pass"/>
                        </div>
                        <div class="mb-4">
                        <h5> <label>  مفعل  </label> </h5>
                            <input class="form-check" type="checkbox" name="block"  value="1"/>
                        </div>
                        <div class="mb-4">
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
