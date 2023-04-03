<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['Campaign_Id']; //userId ID we are using it to get the user record

	include("../../include/connection.php");
	// Set the INSERT SQL data
	
	$sql = "SELECT  block FROM `campaign` WHERE id='".$id."'";
	$result = $mysqli->query($sql);
	$row=mysqli_fetch_array($result);
    $actual_user_state=$row['block'];
	if ($actual_user_state==0) {
		$actual_user_state=1;
	}
    elseif($actual_user_state==1) {
		$actual_user_state=0;
	}
	$mysql = "UPDATE `Campaign` SET `block`='$actual_user_state' WHERE id='".$id."'";
       
	// Process the query so that we will update data
	if ($mysqli->query($mysql)) {
	  echo "Campaign has been sucessfully updated.";
	} else {
	  return "Error: " . $mysql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>