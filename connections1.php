
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "booking";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

echo "Connection obstain successfully";