<?php

	global $con;

$hostname = $_ENV["RDS_HOSTNAME"];
$dbname = $_ENV["RDS_DB_NAME"];
$user = $_ENV["RDS_USERNAME"];
$password = $_ENV["RDS_PASSWORD"];

	$con = mysqli_connect($hostname, $dbname, $user, $password);

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
