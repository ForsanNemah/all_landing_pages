<?php
	$servername = "localhost"; //set the servername
	$username = "root"; //set the server username
	$server_password = ""; // set the server password (you must put password here if your using live server)
	$dbname = "ads"; // set the table name

	$mysqli = new mysqli($servername, $username, $server_password, $dbname);

	if ($mysqli->connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	  exit();
	}

 ?>





