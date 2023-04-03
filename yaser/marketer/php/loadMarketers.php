<?php
	include("../../include/connection.php");

	// Set the INSERT SQL data
	session_start();
    if(isset($_SESSION['customerSession'])){
	    $customerId=$_SESSION['customerId'];
		$sql = "SELECT m.id as id,m.name as name,m.password as password,m.block as block,m.added_date as added_date, c.name as customer FROM marketers m , customer c WHERE c.id=m.marketer_customer AND c.id='".$customerId."'";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		// Fetch Associative array
		$row = $results->fetch_all(MYSQLI_ASSOC);
		// Free result set
		$results->free_result();
	}
	if(isset($_SESSION['adminSession'])){
		$sql = "SELECT m.id as id,m.name as name,m.password as password,m.block as block,m.added_date as added_date, c.name as customer FROM marketers m , customer c WHERE c.id=m.marketer_customer";
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
