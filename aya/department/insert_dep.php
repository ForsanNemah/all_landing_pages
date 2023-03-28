<!--<!--إضافة قسم جديد ->-->
<?php
session_start();
include "../config/connection.php";
include "../config/header.php";

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
                            <label> الاسم </label>
                            <input class="form-control" type="text" name="name"/>
                        </div>



                        <div class="mb-5">
                            <label> Block </label>
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
