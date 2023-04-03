<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$employeeId = $request['data'];//define the employee ID

	include("../../include/connection.php");

	// Set the INSERT SQL data
	$sql = "SELECT * FROM admins WHERE id='".$employeeId."'";

	// Process the query so that we will save the date of birth
	$results = $mysqli->query($sql);
	// Fetch Associative array
	$row = $results->fetch_assoc();

	// Free result set
	$results->free_result();

	// Close the connection after using it
	$mysqli->close();

	echo json_encode($row);
?>