<?php


$fullname = $_GET["fullname"];
$email = $_GET["email"];
$message = $_GET["message"];

include "MessageSaver.php";
saveMessage($fullname,$email,$message);
echo "
<div id='detail'><h3 class='heading'>Thank You Note</h3></div>
        <div id='divform'>
<h2>I got your your message!!!</h2><h3>Thank you for your valuable time. <br/>I will contact you as soon as possible.<br/>Have a great day.</h3>
 <img src='images/thankyou.jpg' width='390' height='250' alt='thankyou' />

";
?>