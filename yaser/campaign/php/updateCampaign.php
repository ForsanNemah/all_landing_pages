<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $_REQUEST['id']; //CampaignId ID we are using it to get the Campaign record
	$name = $_REQUEST['name']; 
	$link = $_REQUEST['link']; 
	$platform= $_REQUEST['platform']; 
	$exp_date = $_REQUEST['exp_date']; 
	$start_date = $_REQUEST['start_date']; 
	$daily_exch= $_REQUEST['daily_exch']; 

	include("../../include/connection.php");

	// Set the INSERT SQL data
	$sql = "UPDATE `Campaign` SET `camp_name`='$name',`ads_platform`='$platform',`camp_link`='$link',`exp_date`='$exp_date',`start_date`='$start_date',`daily_exch`='$daily_exch' WHERE id='".$id."'";
       
	// Process the query so that we will update data
	if ($mysqli->query($sql)) {
	  echo "Campaign has been sucessfully updated.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>