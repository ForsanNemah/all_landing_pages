<!--تعديل القسم المحدد -->

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
تعديل بيانات القسم
                        <a href="department.php" class="btn btn-danger float-lg-start">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $department_id=mysqli_real_escape_string($con,$_GET['id']);
                        $query="SELECT * FROM department WHERE department_id='$department_id' ";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)> 0){
                            $dep=mysqli_fetch_array($query_run);
                            ?>
                            <form action="index_dep.php" method="post">
                                <input type="hidden" name="id" value="<?=$dep['department_id'];?>"/>

                                <div class="mb-4">
                                  <h5>  <label> الاسم باللغة العربية  </label> </h5>
                                    <input class="form-control" type="text" required="" name="dep_name" value="<?=$dep['dep_name'];?>"/>
                                </div>

                                <div class="mb-4">
                                  <h5>  <label> الاسم باللغة الإنجليزية </label> </h5>
                                    <input class="form-control" type="text" required="" name="name_en" value="<?=$dep['dep_name_en'];?>"/>
                                </div>

                                <div class="mb-5">
                         <h5>   <label> وصف المشروع </label> </h5>                      
                            <textarea class="form-control" name="descr_dep"  required=""  type="text" ><?=$dep['desc_dep'];?> </textarea>

                        </div>
                        <div class="mb-5">
                         <h6>   <label>السعر  </label> </h6>
                            <input class="form-control" type="text" required="" name="price_dep" value="<?=$dep['price_dep'];?>"/>
                        </div>

                        <div class="mb-5">
                         <h5>   <label> رابط فيديو القسم   </label> </h5>
                            <input class="form-control" required="" type="url" name="video_url"  value="<?=$dep['video_url'];?>"/>
                        </div>

                                <div class="mb-4">
                                   <h5> <label> مفعل  </label> </h5>
                                   <?php 
              
              if($dep['block']==1)
              {
                ?>                  
                 <input class="form-check" type="checkbox" name="block" checked="true" value="1"/>
              <?php
              }
              else 
              {
              ?>
                 <input class="form-check" type="checkbox" name="block" value="1"/>
               <?php
              }
                ?>                                </div>

                                <div class="mb-4">
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