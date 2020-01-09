<!DOCTYPE html>
<html>
<head>
<title>XYZ</title>
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
  width: 20%;
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
<form action="./loginconnect.php" style="max-width:400px;margin:auto" method="post">
  <h1>Login Form</h1>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button type="submit" name="submit" class="btn">Login</button>
</form>
<form action="./signup.php" style="max-width:400px;margin:auto" method="post">
  <h4>Didn't registered yet?</h4>
  <button type="submit" class="btn">Signup</button>
</form>
</div>
</body>
</html>
