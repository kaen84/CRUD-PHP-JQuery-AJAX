<?php

	global $con;

$hostname = $_SERVER["RDS_HOSTNAME"];
$dbname = $_SERVER["RDS_DB_NAME"];
$user = $_SERVER["RDS_USERNAME"];
$password = $_SERVER["RDS_PASSWORD"];

	$con = mysqli_connect($hostname, $dbname, $user, $password);

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
