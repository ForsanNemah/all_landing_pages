<!--إضافة قسم جديد ->-->
<?php
include "../config/connection.php";
require "../config/head.php";

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
إضافة قسم
                        <a href="department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="index_dep.php" method="post">

                        <div class="mb-5">
                             <h5><label> الاسم باللغة العربية  </label> </h5>
                            <input class="form-control" type="text" required="" name="name"/>
                        </div>

                        <div class="mb-5">
                         <h5>   <label> الاسم باللغة الإنجليزية   </label> </h5>
                            <input class="form-control" required="" type="text" name="name_en"/>
                        </div>
                        <div class="mb-5">
                           <h5> <label> مفعل  </label> </h5>
                            <input class="form-check" type="checkbox" name="block" value="1"/>
                        </div>

                        <div class="mb-5">
                            <button name="save" type="submit" class="btn btn-primary" > حــفـظ</button>
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
