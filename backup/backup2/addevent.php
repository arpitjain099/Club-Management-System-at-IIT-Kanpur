
<?php session_start();if(!($_SESSION['user']=='root' OR $_SESSION['user']=='normal'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><title>Add new event</title>
	<script type="text/javascript">function cleardata(){<?php
//session_destroy();
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>
window.location="welcome.php";}
</script></head>
	<body><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<FORM METHOD="POST" ACTION="addevent1.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Event Name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Event_Type</TD>
    <TD><INPUT TYPE="TEXT" NAME="type" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Event_Date</TD>
    <TD><INPUT TYPE="TEXT" NAME="date" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Event_ID</TD>
    <TD><INPUT TYPE="TEXT" NAME="event_id" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Primary organizing club</TD>
    <TD><INPUT TYPE="TEXT" NAME="org_club" SIZE="25"></TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>

	</body>
</html>
