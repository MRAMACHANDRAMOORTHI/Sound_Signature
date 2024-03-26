<?php
session_start();
include_once "db.php";
        $name=$_POST["t1"];
	$rs1=mysql_query("select * from userlock where name='$name' and status in ('Locked','Requested')") or die(mysql_error());
	if(mysql_num_rows($rs1)>0) {
	echo "<script type='text/javascript'>window.location=\"defencelogin.php?result=Your Login is Locked\"</script>";
	} else if(isset($_SESSION['ToleranceLevel']) && $_SESSION['ToleranceLevel']==2) {
		$_SESSION['ToleranceLevel']=0;
		$rs1=mysql_query("select * from userlock where name='$name'") or die(mysql_error());
		if(mysql_num_rows($rs1)>0) {
		mysql_query("update userlock set status='Locked' where name='$name'") or die(mysql_error());
		} else {
		mysql_query("insert into userlock values ('$name','Locked')") or die(mysql_error());
		}
		mysql_free_result($rs1);
		header("Location:defencelogin.php?result=Your Login is Locked");
	} else {
	
/*
        ps=con.prepareStatement("select b.status from soundreg a,sound_MailLogin b where a.email=b.MailId and a.name=b.LoginName and a.name=? and (b.status='Locked' or b.status='Requested')");
        ps.setString(1, name);
        rs=ps.executeQuery();
        String status="";
        if(rs.next())
            status=rs.getString(1);
        rs.close();
        ps.close();

        if(status.equals("Locked") || status.equals("Requested"))
        {
            response.sendRedirect("airlogin.jsp?result=Your Login is Locked!!");
        }
        else
        {

            if(Integer.parseInt(session.getAttribute("ToleranceLevel").toString())==3)
            {
                ps=con.prepareStatement("update sound_MailLogin set Status='Locked',Message='Invalid Position',LockDate=? where LoginName=?");
                ps.setString(1, new java.text.SimpleDateFormat("dd-MMM-yyyy").format(new java.util.Date()));
                ps.setString(2, name);
                ps.executeUpdate();
                ps.close();
                response.sendRedirect("airlogin.jsp?result=Your Tolerance Level over and your login is locked!!");
            }
            else
            {
*/
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

                $rs=mysql_query("select x1,y1,x2,y2,x3,y3,x4,y4,x5,y5,time from soundreg where name='$name' and ans$seed='$ans' and field='Defence'") or die(mysql_error());
                if(mysql_num_rows($rs)>0)
                {
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
                        $_SESSION['field']="Defence";
	      $_SESSION['name']=$name;
                        header("Location:defencehome.php");
                    }
                    else
                    {
		if(isset($_SESSION['ToleranceLevel'])) {
                        	$_SESSION['ToleranceLevel']++;
		echo "<script type='text/javascript'>window.location=\"defencelogin.php?result=Incorrect Values\"</script>";		
		} else {
		$_SESSION['ToleranceLevel']=1;
		echo "<script type='text/javascript'>window.location=\"defencelogin.php?result=Incorrect Values\"</script>";		
		}
                    }
                }
                else
                {
		if(isset($_SESSION['ToleranceLevel'])) {
                        	$_SESSION['ToleranceLevel']++;
		echo "<script type='text/javascript'>window.location=\"defencelogin.php?result=Incorrect Values\"</script>";		
		} else {
		$_SESSION['ToleranceLevel']=1;
		echo "<script type='text/javascript'>window.location=\"defencelogin.php?result=Incorrect Values\"</script>";		
		}
                    header("Location:defencelogin.php?result=Invalid Login");
                }
	}
/*
            }
        }
*/
?>