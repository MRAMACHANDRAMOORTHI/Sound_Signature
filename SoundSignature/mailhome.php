<?php
session_start();
if(isset($_SESSION['mailuserid'])) {
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
    </head>
    <body text="darkblue">
    <body onload="change()" onunload="stoptimer()">
        <div id="wrap">
<div id="header">
                <div id="logo">
		<h1 class="lineone">
</h1>
                </div>
</div>
<div id ="navigation">
<ul>
<li class="last"><a href="maillogout.php">SignOut</a></li>
</ul>
</div>
<br><br>
<img  align="right" src="Image/india.jpg" width="200" height="200" alt="indani"/>
<img  align="left" src="Image/india.jpg" width="200" height="200" alt="indani"/>
   <font face="Monotype Corsiva" size="5"></font>
<?php
include_once "db.php";
if(!isset($_GET['mail'])) {
	$rs=mysql_query("select * from userlock where name='$_SESSION[mailuserid]' and status='Locked'") or die(mysql_error());
	if(mysql_num_rows($rs)>0) {
	echo "<table align='center' border='0' style='width:50%;margin-top:20%;'>";
	echo "<tr><th>Request to Release Lock</th><th><a href='mailhome.php?mail' id='Lnk' style='text-decoration:none;' onclick=\"javascript:return confirm('Are You sure to Apply ?')\">Apply</a></th></tr>";
	echo "</table>";	
	} else {
	$rs1=mysql_query("select * from userlock where name='$_SESSION[mailuserid]' and status='Requested'") or die(mysql_error());
		if(mysql_num_rows($rs1)>0) {
		echo "<h3 align='center'>Your application is under process...<br></h3>";
		} else {
		echo "<h3 align='center'>Your Id is not Locked or the Lock have been Released by the Administrator...</h3>";
		}
	}
} else {
	mysql_query("update userlock set status='Requested' where name='$_SESSION[mailuserid]'") or die(mysql_error());
	echo "<h3 align='center'>Applied Successfully<br><a href='mailhome.php'>Refresh</a></h3>";
}
?>
</body>
</html>
<?php
} else {
echo "<h3 align='center'>Unauthorized Access</h3>";
}
?>