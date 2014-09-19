
<?php if(!($_COOKIE['user']=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add queries to the database</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="welcome.php";}</script>
	</head>
	<?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?>
	<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		Write the SQL query in the input field.
		<FORM METHOD="POST" ACTION="querysubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Enter your query</TD>
    <TD><INPUT TYPE="TEXT" NAME="query" SIZE="25"></TD>
  </TR>
  </TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
