<!--حذف المشروع  المحدد -->
<?php
include "../config/connection.php";
require "../config/head.php";
?>
<div class="container mt-5">
    <?php include('../config/message.php'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
حذف المشروع
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

                            <form action="index_project.php" method="post">
                                <input type="hidden" name="id" value="<?=$pro['id'];?>"/>

                                <div class="mb-5">
                                    <h5><label> المشروع  </label> </h5>
                                    <span class="form-control"><?php echo $pro['project_name']; ?> </span>
                                </div>

                                
                                <div class="mb-5">
                                    <button name="delete" type="submit" class="btn btn-danger" > حذف  المشروع </button>
                                </div>
                            </form>
                        <?php
                        }
                        else{

                            echo("<h4> No Such ID Found</h4>");
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "../config/footer.php";

?>