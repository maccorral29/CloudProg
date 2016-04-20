<!DOCTYPE HTML>
<html>
<head>
<title>ASEED</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<header>

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="current-item">
                <a href="#">My Files <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="files.html">My Students</a></li>
                    <li><a href="spedh.html">List of Sped Teacher</a></li>
                </ul>
            </li>
            <li><a href="signup.php">Register</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</div>

</header>

	<div id="page">
        <p><center> <br> Congratulations! You are now a member.</center> </p>
    <div>
    </div>
						
				<div style="clear: both;">&nbsp;</div>
	</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
   
if( $_POST )
{
  $con = mysql_connect($servername,$username,$password);

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db($database, $con);


  $Reg_ID = NULL; 
  $First_Name = $_POST['fname'];
  $Last_Name = $_POST['lname'];
  $Birthdate = $_POST['Birthdate'];
  $Age = $_POST['Age'];
  $Gender = $_POST['gender'];
  $Email_Address = $_POST['email'];
  $UserType = $_POST['usertype'];
  $UserName = $_POST['username'];
  $UserPwd = $_POST['password'];

  $First_Name = mysql_real_escape_string($First_Name);
  $Last_Name = mysql_real_escape_string($Last_Name);
  $Birthdate = mysql_real_escape_string($Birthdate);
  $Age = mysql_real_escape_string($Age);
  $Gender = mysql_real_escape_string($Gender);
  $Email_Address = mysql_real_escape_string($Email_Address);
  $UserType = mysql_real_escape_string($UserType);
  $UserName = mysql_real_escape_string($UserName);
  $UserPwd = mysql_real_escape_string($UserPwd);

  $query = "
  INSERT INTO `register` (`Reg_ID`,`First_Name`, `Last_Name`, `Birthdate`, `Age`,
        `Gender`, `Email_Address`, `UserName`,`UserPwd`) VALUES (NULL,'$First_Name', '$Last_Name',
        '$Birthdate', '$Age', '$Gender',
        '$Email_Address', '$UserName', '$UserPwd');";

  mysql_query($query);


  mysql_close($con);
}

?>

<footer>
				<center>&copy; TEAM ASEED</center>
			</footer>
</body>
</html>
