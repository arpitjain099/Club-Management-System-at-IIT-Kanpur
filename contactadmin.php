
<html>
<head><link rel="stylesheet" type="text/css" href="faillogin.css">
<title>
Retrieve your password
</title>
</head>
<center>
<body><?php //echo $_COOKIE['user'];
if(isset($_COOKIE['user']))
setcookie("user", $_COOKIE['user'], time()+3600);	?>
<br>
<br>
You have come to this page because you forgot your credentials.
<br>
Drop in a mail to <a href="mailto:clubadmin@iitk.ac.in">Admin</a> with your details to retrive your password.
</body>
</center>
</html>