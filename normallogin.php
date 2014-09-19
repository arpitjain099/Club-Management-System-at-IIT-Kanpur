<?php if (!($_COOKIE["user"]=='normal'))die('<h3><center><br><br>You got here because you tried to access this page directly.<br><br>Please make the entry again !<br><br> <a href="index.php">Click</a> here to
go to the login panel.</center></h3>' . mysql_error()); ?>
<html>
<head>
<title>
User logged in
</title><script>
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
}function cleardata(){<?php
setcookie("user", "", time()-3600);
?>
window.location="index.php";}
</script>
</head><link rel="stylesheet" type="text/css" href="background.css">
<body> <?php //echo $_COOKIE['user'];
setcookie("user", $_COOKIE['user'], time()+3600);	?> <div align="right">
    <button type="submit" onclick="cleardata()" formtarget="index.php">Logout</button>&nbsp&nbsp&nbsp&nbsp</div>
    <center>You are at the main page of Application.<br>
    ------------------
    <br>Click on the following action to go to appropriate links</center>
  <center>
<form>
<select name="choice" size="1" onChange="jump(this.form)">
<option value="">EXTERNAL LINKS</option>
<option value="addevent.php">ADD NEW EVENT</option>
<option value="attendance.php">MANAGE ATTENDANCE RECORDS</option>
<option value="secretary.php">ADD CLUB SECRETARY</option>
<option value="eventcoordinator.php">ADD EVENT COORDINATOR</option>
<option value="eventassist.php">ADD EVENT ASSISTS</option>
<option value="faq.php">FAQ'S</option>
<option value="attendancerecord.php">VIEW ATTENDANCE RECORD</option>
<option value="">- - - - - - - - - -</option>
</select>
</form>
<a href="javascript:javascript:history.go(-1)">Click here to go back to previous page</a>
</center>
</body>
</html>