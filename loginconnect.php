<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userlogin";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
}
if(empty($email) || empty($password))
{
		header("location: index.php");
		$_SESSION["login_empty"]="1";
		exit();
	}
		else
		{

		$sql="SELECT * FROM logindetail WHERE email ='$email'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location:  index.php?login=error_wrong_email");
			$_SESSION["login_wrong_email"]="1";
			exit();
		}
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
		if (count($row)) 
		{
	   	if ($row["status"]=='Unverified')
	   	{
	   		//echo"<script>alert('Please Contact Founders and IC's');</script>";
			header("location:  index.php?login=status_Unverified_account_or_Banned");
			$_SESSION["login_status"]="1";
			exit();
		}
		else
		{
				if($password === $row['password'])
				{  
				$hashusername=$row['hashusername'];
				$_SESSION["hashusername"] = $hashusername;
				header("location:home.php?id_of_company=$hashusername");
				exit();
				}
				else
				{
						header("location: index.php?login=error_wrong_password");
						$_SESSION["login_wrong_password"]="1";
						exit();
				}
			
	        }
	    }
}
}
?>
