<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spicegems";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connection is OK";
}
else
{
	echo "Connection is Failed";
}

?>