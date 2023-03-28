<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل القسم  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query1 = "delete from department where department_id='$id'";
    $query2 = "delete from dep_url where department_id='$id'";
    $query3 = "delete from dep_image where department_id='$id'";

    $query_run1= mysqli_query($con,$query1);
    $query_run2= mysqli_query($con,$query2);
    $query_run3= mysqli_query($con,$query3);

    if($query_run1 && $query_run2 && $query_run3){

        $_SESSION['message']="تم حذف بيانات القسم بنجاح ";
        header("Location:department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم حذف بيانات القسم  ";
        header("Location:department.php");
        exit(0);
    }

}



/*كود تعديل بيانات القسم  المحدد */
if(isset($_POST['update'])){
    $dep_id=mysqli_real_escape_string($con,$_POST['id']);
    $name=mysqli_real_escape_string($con,$_POST['dep_name']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $sql = "UPDATE  department SET dep_name='$name', block='".$block."'
                     where department_id='$dep_id'  ";

    $query_run= mysqli_query($con,$sql);
    if($query_run){

        $_SESSION['message']="تم تعديل بيانات القسم بنجاح ";
        header("Location:department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم تعديل بيانات القسم  ";
        header("Location:department.php");
        exit(0);
    }
}

/*كود حفظ سجل لقسم  جديد */
if(isset($_POST['save'])){

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $block=mysqli_real_escape_string($con,$_POST['block']);

    $sql = "INSERT INTO department (dep_name,block)
                          VALUES ('$name', '".$block."')";

    $query_run=mysqli_query($con,$sql);
    if($query_run)
    {
        $_SESSION['message']="تم إضافة قسم جديد ";
        header("Location:department.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم إضافة قسم جديد ";
        header("Location:department.php");
        exit(0);

    }
}

