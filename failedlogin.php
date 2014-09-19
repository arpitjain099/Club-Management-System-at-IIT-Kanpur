<html>
<head>
<link rel="stylesheet" type="text/css" href="faillogin.css">
<title>
Incorrect Login credentials
</title>
<body><?php //echo $_COOKIE['user'];
if(isset($_COOKIE['user']))
setcookie("user", $_COOKIE['user'], time()+3600);	?>
	<center>
		<br><br><br><br><br><br><br><br>
		<br>
		<h3>You have come here because you provided incorrect credentials.Please try again.
		<br><br>
		Click on this <a href="index.php" >link </a>to go to previous page .
		<br>
		<br>
		If you have forgotten the credentials.Go to this <a href="contactadmin.php"> link </a> to get them back.
		</h3><br>
	</center>
</body>
</html>