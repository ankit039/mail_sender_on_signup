<script>
<?php session_start(); ?>
<?php $one = "1"?>
<?php $zero = "0"?>
<?php $signup_sucess = $_SESSION["signup_sucess"]?>
<?php $signup_email_taken = $_SESSION["signup_email_taken"]?>
<?php $signup_wrong_password = $_SESSION["signup_wrong_password"]?>
<?php $signup_wrong_email = $_SESSION["signup_wrong_email"]?>
<?php $signup_wrong_name = $_SESSION["signup_wrong_name"]?>
<?php $signup_empty = $_SESSION["signup_empty"]?>
<?php $login_empty = $_SESSION["login_empty"]?>
<?php $login_wrong_email = $_SESSION["login_wrong_email"]?>
<?php $login_status = $_SESSION["login_status"]?>
<?php $verify_status = $_SESSION["verify_status"]?>
<?php $login_wrong_password = $_SESSION["login_wrong_password"]?>
//signup sucess
 var signup_sucess = <?php echo $signup_sucess?>;
 if(signup_sucess == <?php echo $one?>)
 {
  alert("Sign up completed.Please check you mail for vefication!");
  <?php $_SESSION["signup_sucess"] = array();?>
  var signup_sucess = <?php echo $zero?>;
 }
 //signup username taken
 var signup_email_taken = <?php echo $signup_email_taken?>;
 if(signup_email_taken == <?php echo $one?>)
 {
  alert("Sorry! the Email is taken.");
  <?php $_SESSION["signup_email_taken"] = array();?>
  var signup_email_taken = <?php echo $zero?>;
 }
 //signup wrong password
var signup_wrong_password = <?php echo $signup_wrong_password?>;
 if(signup_wrong_password == <?php echo $one?>)
 {
  alert("Sorry! the both password didn't matched.");
  <?php $_SESSION["signup_wrong_password"] = array();?>
  var signup_wrong_password = <?php echo $zero?>;
}
//signup wrong email
var signup_wrong_email = <?php echo $signup_wrong_email?>;
 if(signup_wrong_email == <?php echo $one?>)
 {
  alert("Sorry! the email is wrong.");
  <?php $_SESSION["signup_wrong_email"] = array();?>
  var signup_wrong_email = <?php echo $zero?>;
}
//signup wrong name
var signup_wrong_name = <?php echo $signup_wrong_name?>;
 if(signup_wrong_name == <?php echo $one?>)
 {
  alert("Sorry! the name you entered is invalid.");
  <?php $_SESSION["signup_wrong_name"] = array();?>
  var signup_wrong_name = <?php echo $zero?>;
}
//signup empty
var signup_empty = <?php echo $signup_empty?>;
 if(signup_empty == <?php echo $one?>)
 {
  alert("Sorry! the signup form was empty.");
  <?php $_SESSION["signup_empty"] = array();?>
  var signup_empty = <?php echo $zero?>;
}
//login empty
var login_empty = <?php echo $login_empty?>;
 if(login_empty == <?php echo $one?>)
 {
  alert("Sorry! the login form was empty.");
  <?php $_SESSION["login_empty"] = array();?>
  var login_empty = <?php echo $zero?>;
}
//login wrong name
var login_wrong_email = <?php echo $login_wrong_email?>;
 if(login_wrong_email == <?php echo $one?>)
 {
  alert("Sorry! the email you entered is not in record or wrong.");
  <?php $_SESSION["login_wrong_email"] = array();?>
  var login_wrong_email = <?php echo $zero?>;
}//login status
var login_status = <?php echo $login_status?>;
 if(login_status == <?php echo $one?>)
 {
  alert("Sorry! your account is Unverified or Banned.");
  <?php $_SESSION["login_status"] = array();?>
  var login_status = <?php echo $zero?>;
}
//login wrong password
var login_wrong_password = <?php echo $login_wrong_password?>;
 if(login_wrong_password == <?php echo $one?>)
 {
  alert("Sorry! the password is wrong.");
  <?php $_SESSION["login_wrong_password"] = array();?>
  var login_wrong_password = <?php echo $zero?>;
}
//verfiy status
var verify_status = <?php echo $verify_status?>;
 if(verify_status == <?php echo $one?>)
 {
  alert("Hurray! Now you can login through your mail and password as you email is verified now.");
  <?php $_SESSION["verify_status"] = array();?>
  var verify_status = <?php echo $zero?>;
}
 </script>
