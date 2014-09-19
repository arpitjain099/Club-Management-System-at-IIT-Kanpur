<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="faillogin.css">
	<title>
		FAQ Page
	</title>
</head>
<body background="depositphotos_1372619-Amazed-child-looking-at-camera.jpg" background-repeat=no-repeat><?php //echo $_COOKIE['user'];
if(isset($_COOKIE['user']))
setcookie("user", $_COOKIE['user'], time()+3600);	?>
	<center><br><br><br><br><br><br><br><br>
		<h3>Welcome to FAQ section of this web portal.<br>
			<br>I have integrated the FAQ section for your better use as a PDF file.
	<br></h3>
	<h3>The file can be accessed <a href="descriptionandfaq.pdf"> here</a>.</h3></center>
</body>
</html>