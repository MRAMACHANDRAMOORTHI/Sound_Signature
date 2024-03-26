<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mail Homepage</title>
        <script>
            function change() {
  if(document.getElementById('Lnk').style.color=="blue")
     document.getElementById('Lnk').style.color="red";
  else
    document.getElementById('Lnk').style.color="blue";
  timer=setTimeout("change()",200);
}

function stoptimer()
{
   clearTimeout(timer);
}
</script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTEGRATION OF SOUND SIGNATURE IN GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
a {
text-decoration:none;
color:darkblue;
font-weight:bold;
}
</style>
    </head>
    <body text="darkblue">
    <body onload="change()" onunload="stoptimer()">
<?php
if(isset($_SESSION['userid']) && $_SESSION['userid']=="admin") {
?>
        <div id="wrap">
<div id="header">
                <div id="logo">
		<h1 class="lineone">
</h1>
                </div>
</div>
<div id ="navigation">
<ul>
<li><a href="adminhome.php">Release Lock</a></li>
<li><a href="lockedusers.php">Locked Users</a></li>
<li class="last"><a href="adminlogout.php">SignOut</a></li>
</ul>
</div>
<br><br>
<img  align="right" src="Image/india.jpg" width="200" height="200" alt="indani"/>
<img  align="left" src="Image/india.jpg" width="200" height="200" alt="indani"/>
   <font face="Monotype Corsiva" size="5"></font>
<?php
include_once "db.php";
	$rs=mysql_query("select u.name,city,email,field from userlock u,soundreg s where u.name=s.name and status='Locked'") or die(mysql_error());
	echo "<center><table align='center' border='1'><tr><th colspan='4'>LOCKED USERS</th></tr><tr><th>Name</th><th>City</th><th>e-Mail</th><th>Field</th></tr>";
	while($r=mysql_fetch_row($rs)) {
	echo "<tr>";
	foreach($r as $rr)
	echo "<td>$rr</td>";
	}
	echo "</table>";
} else {
echo "<h3 align='center'>Unauthorized Access</h3>";
}
?>
</body>
</html>
