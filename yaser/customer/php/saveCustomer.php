<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$password = $request['password']; //get the admin password from add admin form
	$name = $request["name"]; //get the admin name from add admin form
	include("../../include/connection.php");



	// Set the INSERT SQL data
	$sql = "INSERT INTO customer (name,password)
	VALUES ('".$name."', '".$password."')";

	// Process the query so that we will save the date of birth
	if ($mysqli->query($sql)) {
	  echo "customer has been successfully created.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>