<?php
	ob_start();
	
	// without session_start(); -- sessions won't work
	session_start();

	$timezone = date_default_timezone_set("America/New_York");

	// server name, username, password, DB name
	$con = mysqli_connect('localhost', 'root', '', 'finalprojectdb');

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>