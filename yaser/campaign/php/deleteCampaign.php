<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['Campaign_Id']; //CustomerId ID we are using it to get the user record
	include("../../include/connection.php");

	//date_default_timezone_set('Australia/Melbourne');
	//$current_timestamp =strtotime("now");	// Set the INSERT SQL data
	$sql = "DELETE From `campaign`  WHERE id=$id";
       
	// Process the query so that we will update data
	if ($mysqli->query($sql)) {
	  echo "campaign has been sucessfully Deleted.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}
	// Close the connection after using it
	$mysqli->close();
?>