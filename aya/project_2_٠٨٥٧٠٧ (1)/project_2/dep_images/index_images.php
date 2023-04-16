<?php
require '../config/connection.php';
/*كود حذف سجل الصورة  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $sql="SELECT dep_image from dep_image WHERE id='$id' "  ;
    $s_run = mysqli_query($con, $sql);
                //جلب مسار الصورة  التي نريد تعديلها 
    $img ;
    if(mysqli_num_rows($s_run)> 0)
    {
         $img=mysqli_fetch_array($s_run);
         $path_img=$img['dep_image'];
      }
    $query = "delete from dep_image where id='$id'";
    $query_run= mysqli_query($con,$query);

  
    if($query_run){
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
if(isset($_POST['update'])){

    $id=mysqli_real_escape_string($con,$_POST['id']);
    $block=mysqli_real_escape_string($con,$_POST['block']);

    $new_image=$_FILES['dep_image']['name'];
    $old_image=mysqli_real_escape_string($con,$_POST['image_name']);
    $update_image;
    
    if($new_image != '')
    {
      $update_image = $_FILES['dep_image']['name']; 
    }
    else 
    {
        $update_image = $old_image; 
    }
    if(strtolower(end(explode('.',$update_image))=='png' ) || strtolower(end(explode('.',$update_image))=='jpg' ) || strtolower(end(explode('.',$update_image))=='jpeg' ) )
       {    
         
    $sql = "UPDATE dep_image SET dep_image='$update_image', block='$block' WHERE id='$id'" ;
    $query_run=mysqli_query($con,$sql);
       
    if($query_run)
    {
        if($_FILES['dep_image']['name'] !=''){
        move_uploaded_file($_FILES['dep_image']['tmp_name'],"../img/".$_FILES['dep_image']['name']);
          unlink("../img/".$old_image);    
    }
        $_SESSION['message']="تم تعديل  الصورة بنجاح ";
        header("Location:view.php");
        exit(0);
    }
}
    else{
       
        $_SESSION['message']="لم يتم تعديل  الصورة ";
        header("Location:view.php");
        exit(0);

    }
}

/*إضافة صورة للقسم المحدد */
if(isset($_POST['save'])){
    $tm=md5(time());
    $dep_id=mysqli_real_escape_string($con,$_POST['id']);
$fnm=$_FILES['dep_image']['name'];

    $_SESSION['id']=$dep_id;
    $block=mysqli_real_escape_string($con,$_POST['block']);
    if(strtolower(end(explode('.',$fnm))=='png' ) || strtolower(end(explode('.',$fnm))=='jpg' ) || strtolower(end(explode('.',$fnm))=='jpeg' ) )
    
    {
    $sql = "INSERT INTO dep_image (department_id,dep_image,block)
                          VALUES ('$dep_id','$fnm', '".$block."')";
    $query_run=mysqli_query($con,$sql);
           }
    if($query_run)
    {      
        move_uploaded_file($_FILES['dep_image']['tmp_name'],"../img/".$_FILES['dep_image']['name']);
        $_SESSION['message']="تم إضافة الصورة بنجاح ";
        header("Location:view.php");
        exit(0);
    }
    else{
    
        $_SESSION['message']="لم يتم إضافة الصورة ";
        header("Location:view.php");
        exit(0);
    }
}
