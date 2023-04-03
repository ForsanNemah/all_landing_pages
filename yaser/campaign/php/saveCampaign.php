<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$name = $request['name']; //get the Campaign password from add Campaign form
	$platform = $request["platform"]; //get the Campaign name from add Campaign form
	$customerId = $request["customer"];
	$link = $request["link"];
	$start_date= $request["start_date"];
	$exp_date = $request["exp_date"];
	$daily_exchange = $request["daily_exch"];

	include("../../include/connection.php");

	if($name == NULL || $platform == NULL ||$customerId == NULL || $link == NULL ||$start_date == NULL || $exp_date == NULL || $daily_exchange == NULL  )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	// Set the INSERT SQL data
	$sql = "INSERT INTO campaign (camp_name,customer_id,ads_platform,start_date,exp_date,daily_exch,camp_link)
	VALUES ('".$name."', '".$customerId."', '".$platform."', '".$start_date."', '".$exp_date."', '".$daily_exchange."', '".$link."')";

	// Process the query so that we will save the data
	if ($mysqli->query($sql)) {
	  echo "Campaign has been successfully created.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}
	// Close the connection after using it
	$mysqli->close();
?>
