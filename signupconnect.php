<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userlogin";
;

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
}
	//error handlers 
	//check for empty fields
	if (empty($name)|| empty($email)||empty($pwd)|| empty($cpwd)) 
	{
		header("location: index.php?signup=empty");
		$_SESSION["signup_empty"]="1";
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $name)) 
		 	{
			header("location: index.php?signup=invalid_Name");
			$_SESSION["signup_wrong_name"]="1";
			exit();
			}
		else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
			header("location: index.php?signup=notvalid_email");
			$_SESSION["signup_wrong_email"]="1";
			exit();
			}
			else if(($pwd)!=($cpwd))
			{
			header("location: index.php?signup=password_not_match");
			$_SESSION["signup_wrong_password"]="1";
			exit();
			}
				$sql = "SELECT * FROM logindetail WHERE email='$email'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					header("location: index.php?signup=email_already_taken");
					$_SESSION["signup_email_taken"]="1";
					exit();
				} 
                   
                    $status='Unverified';
                    $hashusername=password_hash($name,PASSWORD_DEFAULT);
           			$row = mysqli_fetch_assoc($result);
					$sql= "INSERT INTO logindetail (name,email,password,status,hashusername) VALUES 
					('$name','$email','$pwd','$status','$hashusername');";
					mysqli_query($conn,$sql);
					
			if($name && $email && $pwd) 
			{
  			$_SESSION["email"] = "$email";
            $_SESSION["signup_sucess"]="1";
            header('location: mailsender.php');
            } 
							exit();
				
		}
	}
?>
