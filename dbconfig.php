<?php

	global $con;
$databaseHost = $_ENV["RDS_HOSTNAME"];
$databaseName = $_ENV["RDS_DB_NAME"];
$databaseUsername = $_ENV["RDS_USERNAME"];
$databasePassword = $_ENV["RDS_PASSWORD"];
	$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
