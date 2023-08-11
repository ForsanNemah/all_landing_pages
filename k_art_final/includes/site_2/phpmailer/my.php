<?php
require 'index.php';

if(isset($_POST['save'])){

$name= $_POST['name'];
$email= $_POST['email'];
$phn= $_POST['phn'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$full_subject=$name."-".$phn."-".$email."-".$subject;


/*
 send_mail("ksa.kho.kart@gmail.com","ksa.kho.kart@gmail.com","tilnfgwfrfsoovqv",$full_subject,$message,"smtp.gmail.com","465");

*/

echo "wwe";

























 
			//include our connection
            include "../../../admin/admin2/config/connection.php";
     
 
			//query from the table that we create
			$sql = "SELECT * from admins";
			$query = mysqli_query($con,$sql);
 
			while($row = mysqli_fetch_assoc($query)){
				//echo $row['rowid']."<br>";
			
 

$email= $row['email'];
echo $email;
 
//send_mail($email,"ksa.kho.kart@gmail.com","tilnfgwfrfsoovqv",$full_subject,$message,"smtp.gmail.com","465");
send_mail("ksa.kho.kart@gmail.com","ksa.kho.kart@gmail.com","tilnfgwfrfsoovqv",$full_subject,$message,"smtp.gmail.com","465");


            }










			echo '<script type="text/javascript">
        
			alert("sent successfully");
			window.open("../../index_1.php", "_self");
			
			</script>
			
			';




}


?>