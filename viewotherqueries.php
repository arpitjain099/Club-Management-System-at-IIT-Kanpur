
<?php if(!($_COOKIE['user']=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="background.css"><title>Commonly made queries</title>
	<script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
	</head>
  <body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		<center><FORM method="post" autocomplete="off"action="queryprocessing.php">

<TABLE BORDER="0.1">
  <TR>
    <TR>Search attendance by event ID:</TR>
    <TD>Give Event ID</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="eventid1" SIZE="25">
    </TD>
    </TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"><br><br><br>
<TABLE BORDER="0.1">
  <TR>
    <TR>Search event assist by event ID:</TR>
    <TD>Give Event ID</TD><TD>
      <INPUT TYPE="TEXT" NAME="eventid2" SIZE="25">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"><br><br><br>
<TABLE BORDER="0.1">
  <TR>
    <TR>Search attendance by E-mail ID:</TR>
    <TD>Give E-mail ID</TD><TD>
      <INPUT TYPE="TEXT" NAME="eventid3" SIZE="25">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"><br><br><br>
<TABLE BORDER="0.1">
  <TR>
    
    <TR>Search club secretaries</TR>
    <TD>Give Name of Club</TD><TD>
      <INPUT TYPE="TEXT" NAME="eventid4" SIZE="25">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1">
</FORM>
		<br>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
	</center></body>
</html>
