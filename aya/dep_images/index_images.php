<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل الصورة  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query = "delete from dep_image where id='$id'";
    $query_run= mysqli_query($con,$query);

    if($query_run){

        $_SESSION['message']="تم حذف الصورة بنجاح ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم حذف الصورة ";
        header("Location:../department/department.php");
        exit(0);
    }
}
/*كود تعديل بيانات الصورة  المحدد */
if(isset($_POST['update'])){

    $tm=md5(time());
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $fnm=$_FILES['dep_image']['name'];
    $dst="../img/".$tm.$fnm;
    $dst1="../img/".$tm.$fnm;
    $block=mysqli_real_escape_string($con,$_POST['block']);

    move_uploaded_file($_FILES['dep_image']['tmp_name'],$dst);

    $sql = "UPDATE  dep_image SET dep_image='$dst1', block='".$block."'
                     where id='$id'  ";

    $query_run= mysqli_query($con,$sql);
    if($query_run){

        $_SESSION['message']="تم تعديل الصورة   بنجاح ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم تعديل  الصورة   ";
        header("Location:../department/department.php");
        exit(0);
    }
}

/*إضافة صورة للقسم المحدد */
if(isset($_POST['save'])){
    $tm=md5(time());
$fnm=$_FILES['dep_image']['name'];
    $dst="../img/".$tm.$fnm;
    $dst1="../img/".$tm.$fnm;

    move_uploaded_file($_FILES['dep_image']['tmp_name'],$dst);
    $dep_id=mysqli_real_escape_string($con,$_POST['id']);
    $block=mysqli_real_escape_string($con,$_POST['block']);

    $sql = "INSERT INTO dep_image (department_id,dep_image,block)
                          VALUES ('$dep_id','$dst1', '".$block."')";
    $query_run=mysqli_query($con,$sql);
    if($query_run)
    {
        $_SESSION['message']="تم إضافة الصورة بنجاح ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم إضافة الصورة ";
        header("Location:../department/department.php");
        exit(0);

    }
}

