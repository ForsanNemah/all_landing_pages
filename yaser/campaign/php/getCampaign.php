<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$Campaign_Id = $request['Campaign_Id'];//define the employee ID

	include("../../include/connection.php");


	// Set the INSERT SQL data
	$sql = "SELECT C.id AS id,C.camp_name As camp_name ,C.customer_id  ,C.ads_platform As platform ,C.start_date AS start_date,C.exp_date AS exp_date,C.daily_exch AS daily_exch,C.block AS state,C.camp_link AS link,Customer.name AS customer,COUNT(r.register_id) as registers FROM campaign C ,customer ,register r WHERE C.customer_id=customer.id AND C.id='".$Campaign_Id."' AND c.id=r.campaign_id";
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