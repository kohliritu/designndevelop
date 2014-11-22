<?php

	$con = mysql_connect("localhost","root","");

	if(!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
		mysql_select_db("ritu_database",$con);

//create table

$sql = "CREATE TABLE contact
	(
	ID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(ID),
	YourName varchar(15),
	YourEmail varchar(15),
	YourPhone varchar(10),
	YourMessage varchar(30)
	)";
	
//execute query
	if(!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}
	else
		echo "Contact table created";

mysql_close($con);

?>