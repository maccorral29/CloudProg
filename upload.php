<?php

$studentID = $_POST["studentID"];
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$birthDate = $_POST["birthDate"];
$gender = $_POST["gender"];
$origSpedEntry = $_POST["origSpedEntry"];
$nativeLanguage = $_POST["nativeLanguage"];

require "core/init.php";

if(mysqli_num_rows($result) > 0)
{
	$response = array();
	$code = "reg_false";
	$message = "User Already Exist";
	
	array_push($response, array("code" => $code, "message" => $message));
	echo json_encode(array("server_response" => $response));
}

else
{
	
	$query = "insert into student values('".$studentID."','".$lastName."', '".$firstName."', '".$birthDate."', '".$gender."', '".$origSpedEntry."', '".$nativeLanguage."');";
	$result = mysqli_query($con, $query);
	
	if(!$result)
	{
		$response = array();
		$code = "reg_false";
		$message = "Some server error occurred. Try again";
	
		array_push($response, array("code" => $code, "message" => $message));
		echo json_encode(array("server_response" => $response));
	}
	
	else
	{
		$response = array();
		$code = "reg_true";
		$message = "Upload success";
	
		array_push($response, array("code" => $code, "message" => $message));
		echo json_encode(array("server_response" => $response));
	}
	
	mysqli_close($con);
}

?>