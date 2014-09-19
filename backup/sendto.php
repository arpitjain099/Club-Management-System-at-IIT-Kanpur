
<?php session_start();if(!($_SESSION['user']==''))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head>
<title>
Redirection page
</title>
<script>
<!--
function land(ref, target)
{
lowtarget=target.toLowerCase();
if (lowtarget=="_self") {window.location=loc;}
else {if (lowtarget=="_top") {top.location=loc;}
else {if (lowtarget=="_blank") {window.open(loc);}
else {if (lowtarget=="_parent") {parent.location=loc;}
else {parent.frames[target].location=loc;};
}}}
}
function jump(menu)
{
ref=menu.choice.options[menu.choice.selectedIndex].value;
splitc=ref.lastIndexOf("*");
target="";
if (splitc!=-1)
{loc=ref.substring(0,splitc);
target=ref.substring(splitc+1,1000);}
else {loc=ref; target="_self";};
if (ref != "") {land(loc,target);}
}
</script>
<script type="text/javascript">
function redirect(){window.location="failedlogin.php";}
function redirectroot(){window.location="rootlogin.php";}
function redirectnormal(){window.location="normallogin.php";}
//-->
function cleardata(){<?php
session_destroy();
?>
window.location="index.php";}
</script>
</head>
<body>  <div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
<?php
// Create connection
$con=mysqli_connect("localhost","root","jain","cs315");
//echo $_POST["inpusername"];
//echo $_POST["inppassword"];
$a=$_POST["inpusername"];
$b=$_POST["inppassword"];
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $sql="SELECT * FROM login WHERE login.username='$a' AND login.password='$b';";
  $res=mysqli_query($con,$sql);
  $res1=mysqli_query($con,"SELECT * FROM login INTO OUTFILE '/xampp/htdocs/tut/outfile.csv';");
 //echo $res;
  //print '$res';

 echo " <center>";
 if($a=='sntsecy' AND $b=='rootpass')
  {session_start();
$_SESSION['user']=1;
echo "<script>redirectroot();</script>";}

 else if(count(mysqli_fetch_array($res))) {
  session_start();
   $_SESSION['user']=2;
   echo "<script>redirectnormal();</script>";
  }
  else echo "<script>redirect();</script>";
//-->  

echo "  </center>";
?>
</body>
</html>