
<?php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<?php $con=mysqli_connect("localhost","root","jain","cs315");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $a1=$_POST["query"];
  //$a2=$_POST["password"];
  //$sql1="INSERT INTO login VALUES('$a1','$a2');";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$a1);
 // $quer1='$_POST["query"]';
  //$res2=mysqli_query($con,$quer1);
  //SELECT * FROM login WHERE login.username='$a' AND login.password='$b';
  //"INSERT INTO login VALUES('$a1','$a2');"
  if (!$res1) {
    die('Error:Please make the entry again !' . mysql_error());
}
?><a href="query.php">click</a> here to go to add more queries!