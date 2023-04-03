<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['id']; //userId ID we are using it to get the user record
	$name = $_REQUEST['name']; //userId ID we are using it to get the user record
	$password = $_REQUEST['password']; //userId ID we are using it to get the user record

	include("../../include/connection.php");
	// Set the INSERT SQL data
	$sql = "UPDATE `admins` SET `name`='$name',`password`='$password' WHERE id='".$id."'";
       
	// Process the query so that we will update data
	if ($mysqli->query($sql)) {
	  echo "User has been sucessfully updated.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>