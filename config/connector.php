<?php
$dbc=mysqli_connect("localhost","root","root","systemphp");
if(mysqli_connect_errno())
{
	echo  "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>