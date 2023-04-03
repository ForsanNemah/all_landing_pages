<?php
	include("../../include/connection.php");
	session_start();
    if(isset($_SESSION['customerSession'])){
	    $customerId=$_SESSION['customerId'];
		$sql = "SELECT register_id,camp_name,register_name,phone,cu.name as customer,service,info,source,date,register_state,note,m.name as marketer_name,customer_id FROM register r,marketers m,campaign c,customer cu WHERE r.campaign_id=C.id AND r.markter_id=m.id AND C.customer_id=cu.id AND c.customer_id='".$customerId."'";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		// Fetch Associative array
		$row = $results->fetch_all(MYSQLI_ASSOC);
		// Free result set
		$results->free_result();
	}
	if(isset($_SESSION['adminSession'])){
		$sql = "SELECT register_id,camp_name,cu.name as customer,register_name,phone,service,info,source,date,register_state,note,m.name as marketer_name FROM register r,marketers m,campaign c,customer cu WHERE r.campaign_id=C.id AND C.customer_id=cu.id AND r.markter_id=m.id";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		// Fetch Associative array
		$row = $results->fetch_all(MYSQLI_ASSOC);
		// Free result set
		$results->free_result();
	}
	if(isset($_SESSION['marketerSession'])){
		$marketerId=$_SESSION['marketerId'];
		$sql = "SELECT register_id,camp_name,cu.name as customer, register_name,phone,service,info,source,date,register_state,note,m.name as marketer_name FROM register r,marketers m,campaign c,customer cu WHERE r.campaign_id=C.id AND r.markter_id=m.id  AND C.customer_id=cu.id AND m.id='".$marketerId."'";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		// Fetch Associative array
		$row = $results->fetch_all(MYSQLI_ASSOC);
		// Free result set
		$results->free_result();
	}


	// Close the connection after using it
	$mysqli->close();

	echo json_encode($row);
	
?>
