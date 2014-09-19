<!DOCTYPE html>
<html>
<title>
Welcome Page
</title>
<body>
<align
<center>
Please login with appropriate credentials to access the database:
<br>
<br>
<form action="sendto.php" method="post">
Username:<input type="text" name="inpusername">
<br>
Password:<input type="text" name="inppassword">
<br>
<input type="submit"><br><br>
<?php session_start();
$_SESSION['user']='';?>
Forgot Password? <a href="contactadmin.php">Click</a> here to retrieve the password using your known credentials.
</form>
</center>


</body>
</html>