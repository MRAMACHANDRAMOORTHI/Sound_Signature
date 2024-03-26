<?php
session_start();
include_once "db.php";
        $name=$_POST["t1"];
	$rs2=mysql_query("select * from userlock where name='$name' and status in ('Locked','Requested')") or die(mysql_error());
	if(mysql_num_rows($rs2)>0) {
	echo "<script type='text/javascript'>window.location=\"airlogin.php?result=Your Login is Locked\"</script>";
	} else if(isset($_SESSION['ToleranceLevel']) && $_SESSION['ToleranceLevel']==2) {
		$_SESSION['ToleranceLevel']=0;
		$rs1=mysql_query("select * from userlock where name='$name'") or die(mysql_error());
		if(mysql_num_rows($rs1)>0) {
		mysql_query("update userlock set status='Locked' where name='$name'") or die(mysql_error());
		} else {
		mysql_query("insert into userlock values ('$name','Locked')") or die(mysql_error());
		}
		mysql_free_result($rs1);
		header("Location:airlogin.php?result=Your Login is Locked");
	} else {
                $x1=$_POST["x1"];
                $y1=$_POST["y1"];
                $x2=$_POST["x2"];
                $y2=$_POST["y2"];
                $x3=$_POST["x3"];
                $y3=$_POST["y3"];
                $x4=$_POST["x4"];
                $y4=$_POST["y4"];
                $x5=$_POST["x5"];
                $y5=$_POST["y5"];
                $tm=$_POST["t2"];
                $seed = $_POST['seed'];
                $ques = $_POST["q$seed"];
                $ans = $_POST['ans'];

                $rs=mysql_query("select x1,y1,x2,y2,x3,y3,x4,y4,x5,y5,time from soundreg where name='$name' and ans$seed='$ans' and field='AirForce'") or die(mysql_error());
                if(mysql_num_rows($rs)>0) {
	$r=mysql_fetch_row($rs);
                    $dbx1=$r[0];
                    $dby1=$r[1];
                    $dbx2=$r[2];
                    $dby2=$r[3];
                    $dbx3=$r[4];
                    $dby3=$r[5];
                    $dbx4=$r[6];
                    $dby4=$r[7];
                    $dbx5=$r[8];
                    $dby5=$r[9];
                    $tm1=$r[10];

                    if(((($x1<=$dbx1+3 && $x1>=$dbx1-3) && ($y1<=$dby1+3 && $y1>=$dby1-3)) || (($x2<=$dbx2+3 && $x2>=$dbx2-3) && ($y2<=$dby2+3 && $y2>=$dby2-3)) || (($x3<=$dbx3+3 && $x3>=$dbx3-3) && ($y3<=$dby3+3 && $y3>=$dby3-3)) || (($x4<=$dbx4+3 && $x4>=$dbx4-3) && ($y4<=$dby4+3 && $y4>=$dby4-3)) || (($x5<=$dbx5+3 && $x5>=$dbx5-3) && ($y5<=$dby5+3 && $y5>=$dby5-3))) && $tm==$tm1 )
                    {
                        $_SESSION['field']="AirForce";
	      $_SESSION['name']=$name;
                        header("Location:airforcehome.php");
                    } else {
		if(isset($_SESSION['ToleranceLevel'])) {
                        	$_SESSION['ToleranceLevel']++;
		echo "<script type='text/javascript'>window.location=\"airlogin.php?result=Incorrect Values\"</script>";		
		} else {
		$_SESSION['ToleranceLevel']=1;
		echo "<script type='text/javascript'>window.location=\"airlogin.php?result=Incorrect Values\"</script>";		
		}
                    }
                } else {
		if(isset($_SESSION['ToleranceLevel'])) {
                        	$_SESSION['ToleranceLevel']++;
		echo "<script type='text/javascript'>window.location=\"airlogin.php?result=Incorrect Values\"</script>";		
		} else {
		$_SESSION['ToleranceLevel']=1;
		echo "<script type='text/javascript'>window.location=\"airlogin.php?result=Incorrect Values\"</script>";		
		}
                    header("Location:airlogin.php?result=Invalid Login");
                }
	}
?>