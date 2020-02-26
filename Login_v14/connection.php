<?php
$con=mysqli_connect("localhost","root","mypass12345","signup_system");
if($con->connect_errno>0)
{
	die("Database Not Connect".$con->connect_error);
}
else
{
	//echo "connected";
}
?>