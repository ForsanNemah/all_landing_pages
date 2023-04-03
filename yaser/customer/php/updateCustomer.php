<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['id']; //CustomerId ID we are using it to get the Customer record
	$name = $_REQUEST['name']; 
	$password = $_REQUEST['password']; 
	
	include("../../include/connection.php");

	// Set the INSERT SQL data
	$sql = "UPDATE `customer` SET `name`='$name',`password`='$password' WHERE id='".$id."'";
       
	// Process the query so that we will update data
	if ($mysqli->query($sql)) {
	  echo "customer has been sucessfully updated.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>