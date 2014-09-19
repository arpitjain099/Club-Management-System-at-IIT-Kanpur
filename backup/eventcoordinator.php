
<?php session_start();if(!($_SESSION['user']=='root' OR $_SESSION['user']=='normal'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><title>Add Event Coordinator Records</title><script type="text/javascript">function cleardata(){<?php
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>
window.location="welcome.php";}</script>
	</head>
	<body><div align="right">
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
    <TD>Event Name</TD>
    <TD><INPUT TYPE="TEXT" NAME="name" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Event ID</TD>
    <TD><INPUT TYPE="TEXT" NAME="event_id" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Numeric Index of this person</TD>
    <TD><INPUT TYPE="TEXT" NAME="index" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>

	</body>
</html>
