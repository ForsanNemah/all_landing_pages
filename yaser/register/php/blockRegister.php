<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['Register_Id']; //userId ID we are using it to get the user record

	include("../../include/connection.php");

	// Set the INSERT SQL data
	
	$sql = "SELECT  register_state FROM `register` WHERE register_id='".$id."'";
	$result = $mysqli->query($sql);
	$row=mysqli_fetch_array($result);
    $actual_register_state=$row['register_state'];
	if ($actual_register_state==0) {
		$actual_register_state=1;
	}
	elseif ($actual_register_state==1) {
		$actual_register_state=2;
	}
    elseif($actual_register_state==2) {
		$actual_register_state=1;
	}
	$mysql = "UPDATE `register` SET `register_state`='$actual_register_state' WHERE register_id='".$id."'";
       
	// Process the query so that we will update data
	if ($mysqli->query($mysql)) {
	  echo "Register has been sucessfully updated.";
	} else {
	  return "Error: " . $mysql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>