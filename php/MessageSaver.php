<?php
function saveMessage($fullname,$email,$message)
{
	$messagestring = $fullname . "--".$email . "--". $message."[NEW MESSAGE]";


	$file = fopen("message/message.txt","a");
	fwrite($file,$messagestring);
	fclose($file);

}

?>