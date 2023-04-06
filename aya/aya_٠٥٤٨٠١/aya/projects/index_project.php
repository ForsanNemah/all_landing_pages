<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل المشروع  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);

        //جلب مسار الملف الذي نريد تعديله 
    $pdf;
    $sql="SELECT project_url from projects WHERE id='$id' "  ;
    $s_run = mysqli_query($con, $sql);
    if(mysqli_num_rows($s_run)> 0)
    {
         $pdf=mysqli_fetch_array($s_run);
         $path_pdf=$pdf['project_url'];

        }

    $query = "delete from projects where id='$id'";
    $query_run= mysqli_query($con,$query);

    if($query_run){
                //حذف الملف من المجلد 
        unlink ($path_pdf);
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
    $type= $_FILES['project_url']['type'];
    $dst="../project_pdf/".$tm.$fnm;
    $dst1="../project_pdf/".$tm.$fnm;

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $name_en=mysqli_real_escape_string($con,$_POST['name_en']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $id=mysqli_real_escape_string($con,$_POST['id']);

    //جلب مسار الملف الذي نريد تعديله 
    $pdf;
    $sql="SELECT project_url from projects WHERE id='$id' "  ;
    $s_run = mysqli_query($con, $sql);
    if(mysqli_num_rows($s_run)> 0)
    {
         $pdf=mysqli_fetch_array($s_run);
         $path_pdf=$pdf['project_url'];
        }
if(strtolower(end(explode('.',$fnm))=='pdf' ) || strtolower(end(explode('.',$fnm))=='xlsx' ) )
{

    $sql = "UPDATE  projects SET project_name='$name',project_name_en='$name_en', project_url='$dst1', block='$block'
                     where id='$id' ";

    $query_run=mysqli_query($con,$sql);
}
    if($query_run)
    {
    
          //حذف الملف من المجلد 
          unlink ($path_pdf);
        move_uploaded_file($_FILES['project_url']['tmp_name'],$dst);
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

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $name_en=mysqli_real_escape_string($con,$_POST['name_en']);

    $block=mysqli_real_escape_string($con,$_POST['block']);
    if(strtolower(end(explode('.',$fnm))=='pdf' ) || strtolower(end(explode('.',$fnm))=='xlsx' ) )
         {

    $sql = "INSERT INTO projects (project_name,project_name_en,project_url,block)
                          VALUES ('$name','$name_en','$dst1', '".$block."')";

       $query_run=mysqli_query($con,$sql);
         }
    if($query_run)
    {
        move_uploaded_file($_FILES['project_url']['tmp_name'],$dst);

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

