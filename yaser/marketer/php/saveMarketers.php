<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$password = $request['password']; //get the markter password from add markter form
	$name = $request["name"]; //get the markter name from add markter form
	$customer = $request["customer"]; 
	include("../../include/connection.php");


	// Set the INSERT SQL data
	$sql = "INSERT INTO marketers (name,password,marketer_customer)
	VALUES ('".$name."', '".$password."','".$customer."')";

	// Process the query so that we will save the date of birth
	if ($mysqli->query($sql)) {
	  echo "Markters has been successfully created.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>