
<?php if (!($_COOKIE["user"]=='normal' OR $_COOKIE["user"]=='sntsecy'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?><?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?>
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
  $a5=$_POST["room_no"];
  $a6=$_POST["hall"];
  $a7=$_POST["email"];
  $sql1="INSERT INTO secretary VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7');";
 //$sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res1=mysqli_query($con,$sql1);
  if (!$res1) {
    die('Error:Please make the entry again,either the person does not exist or you have made some mistake !' . mysql_error());
}

?><a href="secretary.php">click</a> here to add more secretaries!<br><a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>