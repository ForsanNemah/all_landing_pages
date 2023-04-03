<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$user_password = $request['user_password'];//define the employee ID

	include("../../include/connection.php");


	// Set the INSERT SQL data
	$sql = "SELECT * FROM admins WHERE password='".$user_password."' AND state=0 ";
	// Process the query so that we will save the date of birth
	$results = $mysqli->query($sql);
	$check=mysqli_num_rows($results);          
	if ($check>0) {

		// Fetch Associative array
		$row = $results->fetch_assoc();
		$user_name=$row['name'];
		session_start();
		$_SESSION['adminSession']=rand(0,10000)*3414151;
		$_SESSION['user_name']=$user_name;
	    $results->free_result();
	    echo json_encode($row);
	
	}
	else{
		$sql = "SELECT * FROM customer WHERE password='".$user_password."' AND state=0";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		$check=mysqli_num_rows($results);
		if ($check>0) {

			// Fetch Associative array
			$row = $results->fetch_assoc();
			$user_name=$row['name'];
			$customerId=$row['id'];
			session_start();
			$_SESSION['customerSession']=rand(0,10000)*3414151;
			$_SESSION['user_name']=$user_name;
			$_SESSION['customerId']=$customerId;
			$results->free_result();
			echo json_encode($row);
		
		}else{
			$sql = "SELECT * FROM marketers WHERE password='".$user_password."' AND block=0";
			// Process the query so that we will save the date of birth
			$results = $mysqli->query($sql);
			$check=mysqli_num_rows($results);
			if ($check>0) {
	
				// Fetch Associative array
				$row = $results->fetch_assoc();
				$user_name=$row['name'];
				$marketerId=$row['id'];
				$marketer_customer=$row['marketer_customer'];
				session_start();
				$_SESSION['marketerSession']=rand(0,10000)*3414151;
				$_SESSION['user_name']=$user_name;
				$_SESSION['marketerId']=$marketerId;
				$_SESSION['marketerCustomer']=$marketer_customer;
				$results->free_result();
				echo json_encode($row);
			
			}
		}

	}

	// Close the connection after using it
	$mysqli->close();

	
?>