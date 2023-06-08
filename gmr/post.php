<?php

echo "wwe";
include 'init.php';








$username=$_POST['username'];
$phone=$_POST['phone'];
$url=$_POST['url'];
$customer=$_POST['customer'];

//echo $username.$phone.$url.$customer; 


$sql="select *  from users  where username='".$username."'";
$result=mysqli_query($con,$sql);
//echo "count =".mysqli_num_rows($result);
$users_count =mysqli_num_rows($result);

if($users_count>=1){
echo "user found ";


}
else{

    echo "user not  found ";

}














/*
 
$sql="select *  from url_transactions  where customer='".$customer."'";
$result=mysqli_query($con,$sql);
$response=array();

echo "count =".mysqli_num_rows($result);
/*

	while($row=mysqli_fetch_array($result))
	{
		 echo $row["id"];
	}
*/
/*
$sql="INSERT INTO url_transactions(phone,username,customer,ut_url) VALUES ('".$phone."','".$username."','".$customer."','".$url."'  )";


	if(mysqli_query($con,$sql)){


	echo("تمت بنجاح");
	
	
	
 
	 
	}else{
		echo("فشل");
echo(mysqli_error($con));
	}





*/






?>