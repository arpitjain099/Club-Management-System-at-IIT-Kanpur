
<?php session_start();if(($_SESSION['user']!=1))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<?php $con=mysqli_connect("localhost","root","jain","cs315");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $a1=$_POST["rollno"];
  $a2=$_POST["name"];
  $a3=$_POST["club_name"];
  $a4=$_POST["index"];
  //$a5=$_POST["event_id"];
  $sql1="INSERT INTO coordinator VALUES('$a1','$a2','$a3','$a4');";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}

?><a href="coordinator.php">click</a> here to go to add more coordinators!