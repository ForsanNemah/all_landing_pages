<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل المشروع  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query = "delete from projects where id='$id'";
    $query_run= mysqli_query($con,$query);

    if($query_run){

        $_SESSION['message']="تم حذف المشروع  بنجاح ";
        header("Location:projects.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم حذف المشروع  ";
        header("Location:projects.php");
        exit(0);
    }
}
/*كود تعديل بيانات المشروع  المحدد */
if(isset($_POST['update'])){
    $tm=md5(time());
    $fnm=$_FILES['project_url']['name'];
    $dst="../project_pdf/".$tm.$fnm;
    $dst1="../project_pdf/".$tm.$fnm;


    move_uploaded_file($_FILES['project_url']['tmp_name'],$dst);

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $id=mysqli_real_escape_string($con,$_POST['id']);

    $sql = "UPDATE  projects SET project_name='$name', project_url='$dst1', block='$block'
                     where id='$id' ";

    $query_run=mysqli_query($con,$sql);
    if($query_run)
    {
        $_SESSION['message']="تم تعديل  المشروع  بنجاح ";
        header("Location:projects.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم تعديل المشروع ";
        header("Location:projects.php");
        exit(0);
    }
}

/*إضافة مشروع جديد */
if(isset($_POST['save'])){
    $tm=md5(time());
    $fnm=$_FILES['project_url']['name'];
    $dst="../project_pdf/".$tm.$fnm;
    $dst1="../project_pdf/".$tm.$fnm;

    move_uploaded_file($_FILES['project_url']['tmp_name'],$dst);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $block=mysqli_real_escape_string($con,$_POST['block']);

    $sql = "INSERT INTO projects (project_name,project_url,block)
                          VALUES ('$name','$dst1', '".$block."')";

       $query_run=mysqli_query($con,$sql);
    if($query_run)
    {
        $_SESSION['message']="تم إضافة المشروع  بنجاح ";
        header("Location:projects.php");
        exit(0);
    }
    else{
        $_SESSION['message']="لم يتم إضافة المشروع ";
        header("Location:projects.php");
        exit(0);

    }
}

