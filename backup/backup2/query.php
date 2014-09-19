
<?php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head><title>Add queries to the database</title><script type="text/javascript">function cleardata(){<?php
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>
window.location="welcome.php";}</script>
	</head>
	<body><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
		Write the SQL query in the input field.
		<FORM METHOD="POST" ACTION="querysubmission.php">
<TABLE BORDER="0.1">
  <TR>
    <TD>Enter your query</TD>
    <TD><INPUT TYPE="TEXT" NAME="query" SIZE="25"></TD>
  </TR>
  </TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
 <footer>
  <p>Posted by: Hege Refsnes</p>
  <p><time pubdate datetime="2012-03-01"></time></p>
</footer>

	</body>
</html>
