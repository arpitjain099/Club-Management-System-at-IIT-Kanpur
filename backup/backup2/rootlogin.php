<!--if(!(isset($_SESSION['user'])=='sntsecy')) die('Error:Please make the entry again !' . mysql_error());?>-->
<!--?php if (!($_SESSION["user"]=='SntSecy'))die('Error:Please make the entry again !' . mysql_error()); ?>
?php setcookie("sntsecy", "SntSecy", time()+3600); ?>-->
<?php session_start();if(!($_SESSION['user']=='root'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head>
	<title>Root user logged in!</title>
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
function cleardata(){<?php
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
?>
window.location="welcome.php";}
</script>
</head>
<body>
	
	<div align="right">
		<button type="submit" onclick="cleardata()" formtarget="welcome.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
	<center>------------------
		<br>Click on the following action to go to appropriate links</center><br>
		<center>
			<form>
<select name="choice" size="1" onChange="jump(this.form)">
<option value="">EXTERNAL LINKS</option>
<option value="addevent.php">ADD NEW EVENT</option>
<option value="attendance.php">MANAGE ATTENDANCE RECORDS</option>
<option value="coordinator.php">ADD CLUB COORDINATOR</option>
<option value="secretary.php">ADD CLUB SECRETARY</option>
<option value="eventcoordinator.php">ADD EVENT COORDINATOR</option>
<option value="eventassist.php">ADD EVENT ASSISTS</option>
<option value="addnewuser.php">MAKE NEW USER TO THE DATABASE</option>
<option value="attendancerecord.php">VIEW ATTENDANCE RECORD</option>
<option value="viewotherqueries.php">VIEW OTHER QUERIES</option>
<option value="query.php">MAKE QUERIES</option>
<option value="faq.php">FAQ'S</option>
<option value="">- - - - - - - - - -</option>
</select>
</form>
</center>
</body>
</html>