<?php

//echo "wwe";
include 'init.php';







$form_type=$_POST['form_type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$best_time=$_POST['best_time'];
$date_and_time=$_POST['date_and_time'];



//echo $name.$phone.$email.$message."values"; 








if($form_type=="1")
{


    $sql="INSERT INTO contact_orders(name,phone,email,message) VALUES ('".$name."','".$phone."','".$email."','".$message."'  )";


    if(mysqli_query($con,$sql)){
    
    
        echo '<script type="text/javascript">
        
    alert("تمت  العملية بنجاح       ");
    window.open("index.php", "_self");
    
    </script>
    
    ';
    
    
    
    
     
    }else{
        echo("فشل");
    echo(mysqli_error($con));
    
    
    echo '<script type="text/javascript">
        
    alert("Eroor 430");
    window.open("index.php", "_self");
    
    </script>
    
    ';
    
    
    
    
    
    
    
    
    
    
    }
}






























if($form_type=="2")
{


    $sql="INSERT INTO drive_test_orders(name,phone,email,date_and_time,message) VALUES ('".$name."','".$phone."','".$email."','".$date_and_time."','".$message."'  )";


    if(mysqli_query($con,$sql)){
    
    
        echo '<script type="text/javascript">
        
    alert("تمت  العملية بنجاح       ");
    window.open("index.php", "_self");
    
    </script>
    
    ';
    
    
    
    
     
    }else{
        echo("فشل");
    echo(mysqli_error($con));
    
    
    echo '<script type="text/javascript">
        
    alert("Eroor 430");
    window.open("index.php", "_self");
    
    </script>
    
    ';
    
    
    
    
    
    
    
    
    
    
    }
}


























/*
$sql="select *  from users  where username='".$username."'";
$result=mysqli_query($con,$sql);
//echo "count =".mysqli_num_rows($result);
$users_count =mysqli_num_rows($result);

if($users_count>=1){
echo "user found ";

$sql="select *  from url_transactions  where customer='".$customer."'";
$result=mysqli_query($con,$sql);
$customer_count =mysqli_num_rows($result);
//echo "customer found ".$customer_count;

if($customer_count<=100){










    $sql="INSERT INTO url_transactions(phone,username,customer,ut_url) VALUES ('".$phone."','".$username."','".$customer."','".$url."'  )";


	if(mysqli_query($con,$sql)){


        echo '<script type="text/javascript">
        
    alert("تم  العملية بنجاح وتقييمك تحت المراجعة    ");
    window.open("index.php", "_self");
    
    </script>
    
    ';

	
	
 
	 
	}else{
		echo("فشل");
echo(mysqli_error($con));


echo '<script type="text/javascript">
        
alert("هذا التقييم موجود مسبقا ");
window.open("index.php", "_self");

</script>

';










	}































  















}
else{

    echo '<script type="text/javascript">
        
    alert("  تم تجاوز العدد المطلوب من التقييمات تواصل مع مدير المنصة ");
    window.open("index.php", "_self");
    
    </script>
    
    ';
    

}



}
else{

    echo "user not  found ";

    echo '<script type="text/javascript">
        
    alert("  تاكد من كتابة اسم المستخدم بشكل صحيح ");
    window.open("index.php", "_self");
    
    </script>
    
    ';

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