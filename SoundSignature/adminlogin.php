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
<li><a href="index.php">Home</a></li>
<li><a href="loginpage.php">Login</a></li>
<li class="last"><a href="airreg.php">Registration</a></li>
<!--li class="last"><a href="homepage.php">Log Out</a></li-->
</ul>
</div>
<br><br>
<img  align="right" src="Image/india.jpg" width="200" height="200" alt="indani"/>
<img  align="left" src="Image/india.jpg" width="200" height="200" alt="indani"/>
   <font face="Monotype Corsiva" size="5"></font>
<?php
include_once "db.php";
if(!isset($_POST['submit'])) {
?>
<form name="f" action="" method="post">       
    <table border="0" cellpadding="10" align="center" cellspacing="10" width="50%">
        <tr>
            <th style="border-color:blue" id="Lnk"  colspan="3" >ADMIN LOGIN PAGE</th>
        </tr>
        <tbody>
            <tr>
                <th colspan="2">Admin Login</th>
            </tr>
            <tr>
                <th align="right" width="50%">UserId</th>
	<td><input type="text" name="userid" required></td>
	</tr>
	<tr>
                <th align="right">Password</th>
                <td><input type="password" name="pwd" required></td>
            </tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Login">
	</td>
	</tr>
                   </tbody>
    </table>
</form>
<?php
} else {
	$userid=$_POST['userid'];
	$pwd=$_POST['pwd'];

	if($userid=="admin" && $pwd=="admin") {
	$_SESSION['userid']="admin";
	header('Location:adminhome.php');
	} else {
	echo "<h3 align='center'>Invalid Userid/Password<br><a href='adminlogin.php'>Back</a></h3>";
	}
}
?>
</body>
</html>