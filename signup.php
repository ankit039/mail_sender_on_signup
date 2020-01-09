<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        if(window.history.forward(1) != null)
        window.history.forward(1);
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image:linear-gradient(to right, #303030 , #484848,#303030);}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  margin-left: 11%;
  border-radius: 25px 0px 0px 25px;
  padding: 10px;
  background: #888888;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  border-radius: 0px 25px 25px 0px;
  width: 60%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #989898;
  color: black;
  border-radius: 25px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<?php include("alert.php"); ?>
<div align="center">
<br><br><br><br><br><br><br><br>
<form action="./signupconnect.php" style="max-width:400px;margin:auto" method="post">
  <h1>Signup Form</h1>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pwd">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpwd">
  </div>
  <button class="btn" id="login" type="submit" name="submit">Register</button>
</form>
<br>
<form action="./index.php" style="max-width:400px;margin:auto" method="post">
  <button type="submit" class="btn">Login</button>
</form>
</div>
</body>
</html>