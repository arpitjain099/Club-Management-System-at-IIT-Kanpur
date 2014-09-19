
<?php if (!($_COOKIE["user"]=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?><?php $con=mysqli_connect("localhost","root","jain","cs315");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
	//<?php $_POST["roll"]='';?><html><head><link rel="stylesheet" type="text/css" href="background.css"></head>
<?php //echo $_GET["roll"];
$a=$_POST["eventid1"];
$sql1="SELECT * FROM attendance WHERE '$a'=event_id ORDER BY roll_no;";
$res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
echo "Result for query 1 <br>";
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



echo "Result for query 2 <br>";
$a2=$_POST["eventid2"];
$sql2="SELECT * FROM eventassist WHERE '$a2'=event_id ORDER BY rollno;";
$res2=mysqli_query($con,$sql2);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res2))
  {echo "<table border=0.5>";
  echo "<tr>";
  echo "<td>" . $row['rollno'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['clubname'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['email'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['index'] . "&nbsp&nbsp&nbsp</td>";
    echo "<td>" . $row['event_id'] . "&nbsp&nbsp&nbsp</td>";
  echo "</tr>";
  echo "<table>";
  }
echo "</table>";

echo "Result for query 3 <br>";
$a3=$_POST["eventid3"];
$sql3="SELECT * FROM attendance WHERE '$a3'=email ORDER BY event_id;";
$res3=mysqli_query($con,$sql3);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res3))
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


echo "Result for query 4 <br>";
$a4=$_POST["eventid4"];
$sql4="SELECT * FROM secretary WHERE '$a4'=clubname ORDER BY rollno;";
$res4=mysqli_query($con,$sql4);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}
while($row = mysqli_fetch_array($res4))
  {echo "<table border=0.5>";
  echo "<tr>";
  echo "<td>" . $row['rollno'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['name'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['clubname'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['index'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['room_no'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['hall'] . "&nbsp&nbsp&nbsp</td>";
  echo "<td>" . $row['email'] . "&nbsp&nbsp&nbsp</td>";
  echo "</tr>";
  echo "<table>";
  }
echo "</table>";




?><br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a></html>