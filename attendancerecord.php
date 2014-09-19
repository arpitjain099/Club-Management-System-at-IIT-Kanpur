<!--if(!(isset($_SESSION['user'])=='sntsecy')) die('Error:Please make the entry again !' . mysql_error());?>-->
<!--?php if (!($_SESSION["user"]=='SntSecy'))die('Error:Please make the entry again !' . mysql_error()); ?>
?php setcookie("sntsecy", "SntSecy", time()+3600); ?>-->
<!--php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>-->
<?php if (!($_COOKIE["user"]=='normal' OR $_COOKIE["user"]=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><link rel="stylesheet" type="text/css" href="background.css">
	<title>Attendance Record</title><script type="text/javascript">function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}</script>
</head>
<body><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><br><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
	<FORM method="post" autocomplete="off"action="attendancerecordsubmission.php">

<TABLE BORDER="0.1">
  <TR>
    <TD>Enter the rollnumber of the person:</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="roll" SIZE="25">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1">
</FORM><button type="submit" onclick="getcsv()">Get CSV file</button><br>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
</body>
</html>