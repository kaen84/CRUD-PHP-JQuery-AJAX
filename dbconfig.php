<?php

	global $con;
$databaseHost = $_ENV["RDS_HOSTNAME"];
$databaseName = $_ENV["RDS_DB_NAME"];
$databaseUsername = $_ENV["RDS_USERNAME"];
$databasePassword = $_ENV["RDS_PASSWORD"];
	$con = mysqli_connect('localhost','root','','crud-ajax');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
