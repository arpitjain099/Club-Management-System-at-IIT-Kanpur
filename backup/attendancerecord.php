<!--if(!(isset($_SESSION['user'])=='sntsecy')) die('Error:Please make the entry again !' . mysql_error());?>-->
<!--?php if (!($_SESSION["user"]=='SntSecy'))die('Error:Please make the entry again !' . mysql_error()); ?>
?php setcookie("sntsecy", "SntSecy", time()+3600); ?>-->
<!--php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="welcome.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>-->
<?php session_start();if(!($_SESSION['user']=='root' OR $_SESSION['user']=='normal'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head>
	<title>Attendance Record</title><script type="text/javascript">function cleardata(){<?php
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>
window.location="welcome.php";}</script>
</head>
<body><br><div align="right">
    <button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div><?php $con=mysqli_connect("localhost","root","jain","cs315");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
	//<?php $_POST["roll"]='';?>
	<FORM method="post" autocomplete="off">

<TABLE BORDER="0.1">
  <TR>
    <TD>Enter the rollnumber of the person:</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="roll" SIZE="25">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1">
</FORM>
<?php //echo $_GET["roll"];
$a=$_POST["roll"];
$sql="SELECT * FROM attendance WHERE '$a'=roll_no ORDER BY event_id;";
$res1=mysqli_query($con,$sql);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {
  echo "<tr>";
  echo "<td>" . $row['roll_no'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['department'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['email'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['event_id'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?>
</body>
</html>