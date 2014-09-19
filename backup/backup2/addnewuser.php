
<?php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><title>Add new user to DB</title><script type="text/javascript">function cleardata(){<?php
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?></script>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	</head>
	<body>
    <div align="right">
    <button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
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
</FORM>

	</body>
</html>
