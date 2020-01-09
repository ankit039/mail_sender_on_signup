<?php

$readotp = $_GET['otp'];
$reademail = $_GET['mail'];

session_start();
$_SESSION["otp"] = $readotp;
$_SESSION["mail"] = $reademail;
header('location: mailsenderverifyconnect.php');

?>