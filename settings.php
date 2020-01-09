<?php   

session_start();
$useremail = $_SESSION["email"];

//add the information by which you wan to send te email
$username_mail = "xyz@gmail.com";
$username_pwd = "123";

$otp = rand(100000,999999);
$strotp = "$otp";

$msg = "<h2>You are on your way! Lets confirm your E-Mail address!</h2><h3>As you can verify your account by clicking on here <a href='localhost/mailsenderverify.php?otp=$strotp&mail=$useremail'> click here</a></h3><h4>Thanks for making a account on NSS!<br>Regards Team NSS.</h4>";
//<b><font color='red'>$strotp</font></b>

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "userlogin";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

	$sql= "UPDATE logindetail SET otp='$strotp' WHERE email='$useremail'";
	mysqli_query($conn,$sql);
					


?>