
<?php if (!($_COOKIE["user"]=='normal' OR $_COOKIE["user"]=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><?php $con=mysqli_connect("localhost","root","jain","cs315");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
	//<?php $_POST["roll"]='';?><html><head><link rel="stylesheet" type="text/css" href="background.css"><script>function getcsv(){window.location="csvoutput.php"}</script></head>
<?php //echo $_GET["roll"];
$a=$_POST["roll"];
$sql="SELECT * FROM attendance WHERE '$a'=roll_no ORDER BY event_id;";
$res1=mysqli_query($con,$sql);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res1))
  {echo "<table border=0.5>";
  echo "<tr>";
  echo "<td>" . $row['roll_no'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['department'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['email'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['event_id'] . "</td>";
  echo "</tr>";
  echo "<table>";
  }
echo "</table>";



//$output="SELECT * INTO OUTFILE '/result.csv'
//FIELDS TERMINATED BY ',
//FROM attendance WHERE '$a'=roll_no ORDER BY event_id;";$res2=mysqli_query($con,$output);
?><br> <button type="submit" onclick="getcsv()">Get CSV file of attendance records</button>
<br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a></html>