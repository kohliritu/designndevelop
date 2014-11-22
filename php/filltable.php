<?php

$con = mysql_connect("localhost","root","");

	if(!$con)
	{
		die('Could not connect:' . mysql_error());
	}

mysql_select_db("ritu_database", $con);

$sql="INSERT INTO contact (YourName,YourEmail,YourPhone,YourMessage)
VALUES
('$_GET[fullname]','$_GET[email]','$_GET[phone]','$_GET[message]')";

if (!mysql_query($sql,$con))
	{
		die("Error: " . mysql_error());
	}
echo "
<div id='detail'><h3 class='heading'>Thank You Note</h3></div>
        <div id='divform'>
<h2>I got your your message!!!</h2><h3>Thank you for your valuable time. <br/>I will contact you as soon as possible.<br/>Have a great day.</h3>
 <img src='images/thankyou.jpg' width='390' height='250' alt='thankyou' />

";

mysql_close($con);

?>