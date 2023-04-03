<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['Marketer_Id']; //userId ID we are using it to get the user record
	include("../../include/connection.php");

	
	$sql = "DELETE FROM `MarketerS`  WHERE id=$id";
       
	// Process the query so that we will update data
	if ($mysqli->query($sql)) {
	  echo "Marketer has been sucessfully updated.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}
	// Close the connection after using it
	$mysqli->close();
?>