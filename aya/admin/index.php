<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل الادمن المحدد*/
if(isset($_POST['delete']))
{
    $ad_id=mysqli_real_escape_string($con,$_POST['id']);
    $query = "DELETE from admins where id='$ad_id'";
    $query_run= mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="تم حذف الادمن بنجاح ";

        header("Location:admin.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم حذف الادمن ";

        header("Location:admin.php");
        exit(0);
    }

}
  /*كود تعديل بيانات الادمن المحدد */
    if(isset($_POST['update'])){
        $ad_id=mysqli_real_escape_string($con,$_POST['id']);
        $name=mysqli_real_escape_string($con,$_POST['ad_name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $block=mysqli_real_escape_string($con,$_POST['block']);
        $sql = "UPDATE  admins SET ad_name='$name', email='$email', block='".$block."'
                     where id='$ad_id'  ";

        $query_run= mysqli_query($con,$sql);
        if($query_run){

            $_SESSION['message']="تم تعديل بيانات الادمن بنجاح ";
            header("Location:admin.php");
            exit(0);
        }
        else{
            $_SESSION['message']="لم يتم تعديل بيانات الادمن المحدد ";
            header("Location:admin.php");
            exit(0);
        }
}

/*كود حفظ سجل لادمن جديد */
    if(isset($_POST['save'])){

     $name=mysqli_real_escape_string($con,$_POST['ad_name']);
     $email=mysqli_real_escape_string($con,$_POST['email']);
     $block=mysqli_real_escape_string($con,$_POST['block']);

        $sql = "INSERT INTO admins (ad_name,email,block)
                          VALUES ('$name', '$email','".$block."')";

        $query_run=mysqli_query($con,$sql);
if($query_run)
{
    $_SESSION['message']="تم إضافة ادمن جديد ";
    header("Location:admin.php");
    exit(0);
}
        else{
            $_SESSION['message']="لم يتم الاضافة  ";
            header("Location:admin.php");
            exit(0);

        }
    }

