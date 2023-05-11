<?php
session_start();

require '../config/connection.php';
/*كود حذف سجل المشروع  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);

        //جلب مسار الملف الذي نريد حذفة  
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
        unlink ("../project_pdf/".$path_pdf);
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


/*كود تعديل بيانات المشروع   المحدد */
if(isset($_POST['update']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $name_en=mysqli_real_escape_string($con,$_POST['name_en']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $id=mysqli_real_escape_string($con,$_POST['id']);


    $old_project=mysqli_real_escape_string($con,$_POST['project_url_old']);

    $new_pdf =$_FILES['project_url']['name'];
    $allowed_extensions = array('pdf', 'xlsx');
    $pdf_extensions = strtolower(end(explode('.', $new_pdf)));
    $pdf_random = rand(0,10000).'.'. $pdf_extensions;

    if($new_pdf != '')
    {
        $pdf =(basename($new_pdf, $pdf_extensions)).$pdf_random;
        $sql = "UPDATE  projects SET project_name='$name',project_name_en='$name_en', project_url='$pdf', block='$block'
        where id='$id' ";
        $query_run=mysqli_query($con,$sql);    
        move_uploaded_file($_FILES['project_url']['tmp_name'],"../project_pdf/".$pdf);

        unlink("../project_pdf/".$old_project); 
    }
    else 
    {
        $sql = "UPDATE  projects SET project_name='$name',project_name_en='$name_en', block='$block'
        where id='$id' ";
        $query_run=mysqli_query($con,$sql);      
    }       
    if($query_run)
    {
        $_SESSION['message']="تم تعديل  المشروع بنجاح ";
        header("Location:projects.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message']="لم يتم تعديل  المشروع  ";
        header("Location:projects.php");
        exit(0);
    }
}









/*إضافة صورة للقسم المحدد */
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['save'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $name_en=mysqli_real_escape_string($con,$_POST['name_en']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
   
$pdf_name =$_FILES['project_url']['name'];
$allowed_extensions = array('pdf', 'xlsx');
$pdf_extensions = strtolower(end(explode('.', $pdf_name)));
$pdf_random = rand(0,10000).'.'. $pdf_extensions;


if(in_array($pdf_extensions, $allowed_extensions))
{
    $pdf =(basename($pdf_name, $pdf_extensions)).$pdf_random;
    $sql = "INSERT INTO projects (project_name,project_name_en,project_url,block)
    VALUES ('$name','$name_en','$pdf', '".$block."')";
$query_run=mysqli_query($con,$sql);
}
if($query_run)
{      
    move_uploaded_file($_FILES['project_url']['tmp_name'],"../project_pdf/".$pdf);
    $_SESSION['message']="تم إضافة المشروع بنجاح ";
    header("Location:projects.php");
    exit(0);
}
else
{

    $_SESSION['message']="لم يتم إضافة المشروع ";
    header("Location:projects.php");
    exit(0);
}
}
}
