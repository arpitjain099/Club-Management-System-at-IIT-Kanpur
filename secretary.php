
<?php if (!($_COOKIE["user"]=='normal' OR $_COOKIE["user"]=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Add Secretary Records</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="welcome.php";}</script>
	</head>
	<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="secretarysubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Roll Number(Prefix with 'Y' or 'y' IF needed)</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="rollno" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Name</TD>
    <TD><INPUT TYPE="TEXT" NAME="name" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>CLub Name</TD>
    <TD><INPUT TYPE="TEXT" NAME="club_name" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Numeric Index of this person</TD>
    <TD><INPUT TYPE="TEXT" NAME="index" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Room Number</TD>
    <TD><INPUT TYPE="TEXT" NAME="room_no" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Hall</TD>
    <TD><INPUT TYPE="TEXT" NAME="hall" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>E-mail</TD>
    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</body>
</html>
