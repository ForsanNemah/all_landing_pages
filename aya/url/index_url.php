<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل الرابط  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query = "delete from dep_url where id='$id'";
    $query_run= mysqli_query($con,$query);
    if($query_run){

        $_SESSION['message']="تم حذف الرابط بنجاح ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم حذف الرابط  ";
        header("Location:../department/department.php");
        exit(0);
    }

}
/*كود تعديل بيانات الرابط المحدد */
if(isset($_POST['update'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $url=mysqli_real_escape_string($con,$_POST['url']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $sql = "UPDATE  dep_url SET url='$url', block='$block'
                     where id='$id'  ";

    $query_run= mysqli_query($con,$sql);
    if($query_run){

        $_SESSION['message']="تم تعديل الرابط   ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم تعديل الرابط  ";
        header("Location:../department/department.php");
        exit(0);
    }
}

/*كود حفظ سجل رابط  جديد */
if(isset($_POST['save'])){

    $dep_id=mysqli_real_escape_string($con,$_POST['id']);
    $url=mysqli_real_escape_string($con,$_POST['url']);
    $block=mysqli_real_escape_string($con,$_POST['block']);

    $sql = "INSERT INTO dep_url (department_id,url,block)
                          VALUES ('$dep_id','$url', '$block')";

    $query_run=mysqli_query($con,$sql);
    if($query_run)
    {
        $_SESSION['message']="تم إضافة رابط جديد ";
        header("Location:../department/department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم إضافة الرابط  ";
        header("Location:../department/department.php");
        exit(0);

    }
}

