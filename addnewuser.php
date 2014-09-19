
<?php if(!($_COOKIE['user']=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add new user to DB</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?></script>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	</head>
	<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?>
    <div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="addnewusersubmission.php" autocomplete="off">
<TABLE BORDER="0.1">
  <TR>
    <TD>Username</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="username" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Enter your password(Case Sensitive)</TD>
    <TD><INPUT TYPE="TEXT" NAME="password" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM><br>
<a HREF="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
