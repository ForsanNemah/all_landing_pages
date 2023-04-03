<?php
	include("../../include/connection.php");
       session_start();
    if(isset($_SESSION['customerSession'])){
	    $customerId=$_SESSION['customerId'];
		$sql = "SELECT C.id AS id,C.camp_name As camp_name ,C.customer_id  ,C.ads_platform As platform ,C.start_date AS start_date,C.exp_date AS exp_date,C.daily_exch AS daily_exch,C.block AS state,C.camp_link AS link,Customer.name AS customer FROM campaign C , customer WHERE C.customer_id=customer.id AND  customer.id='".$customerId."'";
		$results = $mysqli->query($sql);
		// Fetch Associative array
		$row = $results->fetch_all(MYSQLI_ASSOC);
		//$row = $results->fetch_assoc();
	

		// Free result set
		$results->free_result();
	}
	if(isset($_SESSION['adminSession'])){
		$sql = " SELECT C.id AS id,C.camp_name As camp_name ,C.customer_id  ,C.ads_platform As platform ,C.start_date AS start_date,C.exp_date AS exp_date,C.daily_exch AS daily_exch,C.block AS state,C.camp_link AS link,Customer.name AS customer FROM campaign C,customer  WHERE C.customer_id=customer.id";
		// Process the query so that we will save the date of birth
		$results = $mysqli->query($sql);
		$row = $results->fetch_all(MYSQLI_ASSOC);
		// Free result set
		$results->free_result();
	}
	if(isset($_SESSION['marketerSession'])){
	$marketer_customer=$_SESSION['marketerCustomer'];
	$sql = "SELECT C.id AS id,C.camp_name As camp_name ,C.customer_id  ,C.ads_platform As platform ,C.start_date AS start_date,C.exp_date AS exp_date,C.daily_exch AS daily_exch,C.block AS state,C.camp_link AS link,Customer.name AS customer FROM campaign C , customer , marketers m WHERE C.customer_id=customer.id AND customer.id='".$marketer_customer."' AND m.id='".$_SESSION['marketerId']."' ";
	// Process the query so that we will save the date of birth
	$results = $mysqli->query($sql);
    
	// Fetch Associative array
	$row = $results->fetch_all(MYSQLI_ASSOC);
	// Free result set
	$results->free_result();
	}

  foreach($row as $campaign => $camp){
	$id=$row[$campaign]['id'];
    $sqlCountRegisters="select count(register_id) from register where campaign_id='".$id."' ";
	$counterResult= $mysqli->query($sqlCountRegisters);
    $rows =mysqli_fetch_array($counterResult);
     $row[$campaign]['registers']=$rows['count(register_id)'];	
  }

	// Close the connection after using it
	$mysqli->close();
	//print_r($row)
    echo json_encode($row);
?>
