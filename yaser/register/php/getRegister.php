<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$register_Id = $request['Register_Id'];//define the register ID

	include("../../include/connection.php");


	// Set the INSERT SQL data
	$sql = "SELECT register_id,camp_name,cu.name as customer, register_name,phone,service,info,source,date,register_state,note,m.name as marketer_name FROM register r,marketers m,campaign c,customer cu WHERE r.campaign_id=C.id AND r.markter_id=m.id AND C.customer_id=cu.id AND register_id='".$register_Id."'";

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