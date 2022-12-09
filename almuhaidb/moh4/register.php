<?php
require('init.php');

 
$name=$_POST['name'];
$phn=$_POST['phn'];
$type=$_POST['type'];
$admin_id=$_POST['admin_id'];
 
 
 
  echo $name.$phn.$type.$admin_id;
  
  
  
   
 
 
$sql="INSERT INTO study_orders(admin_id,name,phn,course) VALUES ('".$admin_id."','".$name."','".$phn."','".$type."')";
	if(mysqli_query($con,$sql)){
		echo("تمت بنجاح");
		header("Location: " . $_SERVER["HTTP_REFERER"]);
		exit;
return;
	}else{
		echo("فشل");
echo(mysqli_error($con));
	}



 


?>