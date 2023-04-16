<?php
session_start();
require '../config/connection.php';
/*كود حذف سجل القسم  المحدد*/
if(isset($_POST['delete']))
{
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query1 = "delete from department where department_id='$id'";
   $query2 = "delete from dep_image where department_id='$id'";
    $query="SELECT * FROM dep_image WHERE department_id='$id' ";
    $query_run=mysqli_query($con,$query);

    $query_run1= mysqli_query($con,$query1);

    if($query_run1){

       if(mysqli_num_rows($query_run)> 0){
        
       while($row = mysqli_fetch_assoc($query_run)) {
           unlink ('../img/'.$row['dep_image']);

       }

    }
 $query_run2= mysqli_query($con,$query2);

}
    if($query_run1 && $query_run2 ){

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
    $name_en =mysqli_real_escape_string($con,$_POST['name_en']);
    $descr_dep=mysqli_real_escape_string($con,$_POST['descr_dep']);
    $price_dep=mysqli_real_escape_string($con,$_POST['price_dep']);
    $block=mysqli_real_escape_string($con,$_POST['block']);
    $video_url = mysqli_real_escape_string($con,$_POST['video_url']);


    $sql = "UPDATE  department SET dep_name='$name',dep_name_en='$name_en',desc_dep ='$descr_dep',
    price_dep='$price_dep',video_url='$video_url', block='$block'
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
    $name_en =mysqli_real_escape_string($con,$_POST['name_en']);

    $descr_dep=mysqli_real_escape_string($con,$_POST['descr_dep']);
    $price_dep=mysqli_real_escape_string($con,$_POST['price_dep']);
$video_url = mysqli_real_escape_string($con,$_POST['video_url']);
    $sql = "INSERT INTO department (dep_name,dep_name_en,desc_dep,price_dep, video_url ,block)
                          VALUES ('$name','$name_en','$descr_dep','$price_dep','$video_url', '$block')";

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

