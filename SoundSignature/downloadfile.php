<?php
	$id=$_GET['id'];
include_once "db.php";
	$rs=mysql_query("select aes_decrypt(fpath,'pwd'),size,type,aes_decrypt(fname,'pwd') from uploads where id=$id") or die(mysql_error());
	$r=mysql_fetch_row($rs);
	$fh=fopen($r[0],"r") or die("Cant open file to read...");
	$c = fread($fh,$r[1]) or die("Cant read file to download...");
	fclose($fh);
	header('Content-type:'.$r[2]);
	header('Content-disposition:attachment;filename='.$r[3]);
	echo $c;
?>