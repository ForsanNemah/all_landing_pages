<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل الصورة  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $sql="SELECT dep_image from dep_image WHERE id='$id' "  ;
    $s_run = mysqli_query($con, $sql);
                //جلب مسار الصورة  التي نريد حذفها  
    $img ;
    if(mysqli_num_rows($s_run)> 0)
    {
         $img=mysqli_fetch_array($s_run);
         $path_img=$img['dep_image'];
      }
    $query = "delete from dep_image where id='$id'";
    $query_run= mysqli_query($con,$query);

  
    if($query_run)
    {
                    //حذف الصورة من المجلد  
                  
        unlink ("../img/".$path_img);
        $_SESSION['message']="تم حذف الصورة بنجاح ";
        header("Location:view.php");
        exit(0);
    }
    else{
     
        $_SESSION['message']="لم يتم حذف الصورة ";
        header("Location:view.php");
        exit(0);
    }
}


/*كود تعديل بيانات الصورة  المحدد */
if(isset($_POST['update']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $old_image=mysqli_real_escape_string($con,$_POST['image_name']);
     $new_image = $_FILES['dep_image']['name'];
     $allowed_extensions = array('jpg', 'jpeg','png');
     $image_extensions = strtolower(end(explode('.', $new_image)));
     $image_random = rand(0,1000000000).'.'. $image_extensions;

    if($new_image != '')
    {
        $sql = "UPDATE dep_image SET dep_image='$image_random', block='$block' WHERE id='$id'" ;
        $query_run=mysqli_query($con,$sql); 
        move_uploaded_file($_FILES['dep_image']['tmp_name'],"../img/".$image_random);

        unlink("../img/".$old_image); 
    }
    else 
    {
        $sql = "UPDATE dep_image SET  block='$block' WHERE id='$id'" ;
        $query_run=mysqli_query($con,$sql);        
    }       
    if($query_run)
    {
        $_SESSION['message']="تم تعديل  الصورة بنجاح ";
        header("Location:view.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message']="لم يتم تعديل  الصورة ";
        header("Location:view.php");
        exit(0);
    }
}


/*إضافة صورة للقسم المحدد */
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['save'])){
   $dep_id=mysqli_real_escape_string($con,$_POST['id']);
    $_SESSION['id']=$dep_id;
    $block=mysqli_real_escape_string($con,$_POST['block']);
   
$image_name =$_FILES['dep_image']['name'];
$allowed_extensions = array('jpg', 'jpeg','png');
$image_extensions = strtolower(end(explode('.', $image_name)));
$image_random = rand(0,10000).'.'. $image_extensions;


if(in_array($image_extensions, $allowed_extensions))
{
    $images =(basename($image_name, $image_extensions)).$image_random;
$sql = "INSERT INTO dep_image (department_id,dep_image,block)
VALUES ('$dep_id','$images', '".$block."')";
$query_run=mysqli_query($con,$sql);

}
if($query_run)
{      
    move_uploaded_file($_FILES['dep_image']['tmp_name'],"../img/".$images);
    $_SESSION['message']="تم إضافة الصورة بنجاح ";
    header("Location:view.php");
    exit(0);
}
else
{
    $_SESSION['message']="لم يتم إضافة الصورة ";
    header("Location:view.php");
    exit(0);
}
}
}
