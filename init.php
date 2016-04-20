<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydb";

$con = mysqli_connect($host, $user, $password, $dbname);

if(!$con)
{
	//die("Error in database connection". myqli_connection_error());
}

else
{
	//echo "<h3>Database connection success";
}

?>