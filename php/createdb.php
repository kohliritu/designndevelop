<?php

	$con = mysql_connect("localhost","root","");
	if(!$con)
		{
			die('Could not connect:'.mysql_error());
		}

//create database
	if(mysql_query("CREATE DATABASE ritu_database",$con))
		{
			echo "Database created";
		}
	else
		{
			echo "Error creating database: " .mysql_error();
		}

mysql_close($con);

?>