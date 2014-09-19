<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="indexbackground.css">
<title>
Welcome Page
</title>
</head>
<body>
<center>
<br><br><br>
Please login with appropriate credentials to access the database:
<br>
<br>
<form action="sendto.php" method="post" autocomplete="off">
Username:<input type="text" name="inpusername">
<br>
Password:<input type="password" name="inppassword">
<br>
<input type="submit"><br><br>
<?php session_start();
setcookie("user", "", time()+3600);
$_SESSION['user']='';?>
Forgot Password? <a href="contactadmin.php">Click</a> here to retrieve the password using your known credentials.
</form>
</center>
</body>
</html>