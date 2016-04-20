<?php

$username = $_POST["username"];
$pass = $_POST["password"];
require "core/init.php";

$query = "select *from register where username like '".$username."' and password like '".$pass."';";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
	$response = array();
	$code = "login_true";
	$row = mysqli_fetch_array($result);
	$sped_ID = $row[0];
	$fname = $row[2];
	$sendUser = $row[7];
	$sendPass = $row[8];
	
	$firstNmsg = "".$fname;
	$sendSpedID = "".$sped_ID;
	$sendUsername = "".$sendUser;
	$sendPassword = "".$sendPass;
	
	$message = "Login Success... Welcome ".$fname;
	
	array_push($response, array("code" => $code, "message" => $message, "sendSpedID" => $sendSpedID, "sendUsername" => $sendUsername, "sendPassword" => $sendPassword));
	echo json_encode(array("server_response" => $response));
}

else
{
	$response = array();
	$code = "login_false";
	$message = "Login Failed...Try again";
	
	array_push($response, array("code" => $code, "message" => $message));
	echo json_encode(array("server_response" => $response));
}

?>