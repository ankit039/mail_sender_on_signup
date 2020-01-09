<?php 
session_start();
if(isset($_SESSION["hashusername"])!= "")
{?>
<html>
<head>
  <meta charset="UTF-8">
	<title>Quiz</title>
  <link rel="icon" href="https://i.imgur.com/hmaZoKf.gif" type="image/gif">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <script>
        if(window.history.forward(1) != null)
        window.history.forward(1);
   </script>
</head>

<body>
<div align="center">
<br><br><br><br><br>
<h1>National Security Service</h1><br><br>
<h2><b>This page will appear after you verify your mail.</b></h2>
</div>

</body>
</html>
<?php
                 }

            else{
                    echo ('<meta http-equiv="refresh" content="0; URL=index.php">');
                }
?>
