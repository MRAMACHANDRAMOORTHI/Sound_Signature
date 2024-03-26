<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mail Login Page</title>
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
    </head>
    <body text="darkblue">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTEGRATION OF SOUND SIGNATURE IN GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
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
<li class="last"><a href="loginpage.php">Login</a></li>
</ul>
</div>
<br><br>
<img  align="right" src="Image/india.jpg" width="200" height="200" alt="indani"/>
<img  align="left" src="Image/india.jpg" width="200" height="200" alt="indani"/>
   <font face="Monotype Corsiva" size="5"></font>
<?php
if(!isset($_POST['submit'])) {
?>
<form name="f" action="" method="post">       
    <table border="0" cellpadding="10" align="center" cellspacing="10" width="50%">
        <tr>
            <th style="border-color:blue" id="Lnk"  colspan="3" >MAIL LOGIN PAGE</th>
        </tr>
        <tbody>
            <tr>
                <th colspan="2">Mail Login</th>
            </tr>
            <tr>
                <th align="right" width="50%">UserId</th>
	<td><input type="text" name="userid" required></td>
	</tr>
	<tr>
                <th align="right">e-Mail Id</th>
                <td><input type="text" name="mailid" required></td>
            </tr>
	<tr>
                <th align="right">Security Answer</th>
                <td><input type="password" name="secans" required></td>
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
include_once "db.php";
	$userid=$_POST['userid'];
	$mailid=$_POST['mailid'];
	$secans=$_POST['secans'];
	$rs=mysql_query("select * from soundreg where name='$userid' and email='$mailid' and secans='$secans'") or die(mysql_error());
	if(mysql_num_rows($rs)>0) {
	$_SESSION['mailuserid']=$userid;
	header('Location:mailhome.php');
	} else {
	echo "<h3 align='center'>Invalid Id/Password...<br><a href='maillogin.php' id='Lnk' style='text-decoration:none;'>Back</a></h3>";
	}
}
?>
</body>
</html>