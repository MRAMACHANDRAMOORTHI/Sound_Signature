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
a:hover {
color:red;
}
</style>
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
<li><a href="defencehome.php">Upload Files</a></li>
<li class="last"><a href="userlogout.php">SignOut</a></li>
</ul>
</div>
<br><br>
<?php
if(isset($_SESSION['field']) && $_SESSION['field']=="Defence") {
include_once "db.php";
if(!isset($_POST['submit'])) {
$_SESSION['ToleranceLevel']=0;
?>
<form name="f" action="" method="post" enctype="multipart/form-data">
<center>
<table>
<tr>
<th colspan="2">
FILE UPLOAD
</th>
</tr>
<tr>
<th align="right">Select a file to Upload</th>
<td><input type="file" name="ff" required></td>
</tr>
<tr>
<th align="right">Access Type</th>
<td><input type="radio" name="at" value="private" checked>Private
&nbsp;<input type="radio" name="at" value="public">Public</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Upload">
</td>
</tr>
</table>
</center>
</form>
<?php
} else {
if($_FILES['ff']['size']>0) {
	$name=$_SESSION['name'];
	$field=$_SESSION['field'];
	$fname="Uploads/".time().$_FILES['ff']['name'];
	$nname=$_FILES['ff']['name'];
	$type=$_FILES['ff']['type'];
	$size=$_FILES['ff']['size'];
	$atype=$_POST['at'];
	move_uploaded_file($_FILES['ff']['tmp_name'],$fname) or die("Cannot Upload File...");
	mysql_query("insert into uploads (name,field,fname,type,size,fpath,atype) values ('$name','$field',aes_encrypt('$nname','pwd'),'$type','$size',aes_encrypt('$fname','pwd'),'$atype')") or die(mysql_error());
	echo "<h3 align='center'>File Uploaded Successfully...</h3>";
} else 
echo "<h3 align='center'>File Not Uploaded...</h3>";
}
$rs=mysql_query("select id,name,aes_decrypt(fname,'pwd'),size from uploads where field='$_SESSION[field]' and (name='$_SESSION[name]' or atype='public')") or die(mysql_error());
echo "<center><table border='1' style='margin-top:10%;'><tr><th>Id</th><th>User Name</th><th>File Name</th><th>Size (in Bytes)</th><th>Task</th></tr>";
while($r=mysql_fetch_row($rs)) {
echo "<tr>";
foreach($r as $rr)
echo "<td>$rr</td>";
echo "<td><a href='downloadfile.php?id=$r[0]' onclick=\"javascript:return confirm('Are You sure to Download File ?')\">Download File</a></td>";
echo "</tr>";
}
echo "</table></center>";
} else {
echo "<h3 align='center'>Unauthorized Access</h3>";
}
?>