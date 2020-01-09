<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userlogin";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);


$readotp = $_SESSION["otp"];
$reademail = $_SESSION["mail"];
$updatedby = "Admin";

	if (empty($readotp)|| empty($reademail)|| empty($updatedby)) 
	{
	   header("location: signup.php?=empty");
		exit();
	}
else
		{
		$sql="SELECT * FROM logindetail WHERE email = '$reademail'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if (count($row))
		{
		$checkotp = $row["otp"];
	    }   
		if($checkotp != $readotp)
		{
			header("location: signup.php?login=error_wrong_or_invalid_email");
			exit();
		}
	
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
					$sql= "UPDATE logindetail SET status='verify', updatedby='$updatedby' WHERE email='$reademail'";
					mysqli_query($conn,$sql);
					header('location: index.php');
                    $_SESSION["verify_status"]="1";
       }
}

?>