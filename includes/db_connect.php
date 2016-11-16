<?php
	error_reporting(0);
	session_start();

	$servername = "sulley.cah.ucf.edu";
	$username = "dig4530c_008";
	$password = "knights123!";
	$dbname = "dig4530c_008";
	$datatable = "products"; // MySQL table name
	 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>