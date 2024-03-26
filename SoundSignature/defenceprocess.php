<?php
include_once "db.php";
        $name=$_POST["u1"];
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
        $time=$_POST["t1"];
        $dob=$_POST["t4"]."-".$_POST["t3"]."-".$_POST["t2"];
        $sex=$_POST["t5"];
        $address=$_POST["t6"];
        $city=$_POST["t7"];
        $email=$_POST["t8"];
	$secqn = $_POST['secqn'];	
	$secans = $_POST['secans'];
        $q1 = $_POST['q1'];
        $a1 = $_POST['a1'];
        $q2 = $_POST['q2'];
        $a2 = $_POST['a2'];
        $q3 = $_POST['q3'];
        $a3 = $_POST['a3'];
        $q4 = $_POST['q4'];
        $a4 = $_POST['a4'];
        $q5 = $_POST['q5'];
        $a5 = $_POST['a5'];
        
        $str="insert into soundreg (name,x1,y1,x2,y2,x3,y3,x4,y4,x5,y5,dob,time,sex,address,city,email,field,secqn,secans,ques1,ans1,ques2,ans2,ques3,ans3,ques4,ans4,ques5,ans5) values ('$name',$x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4,$x5,$y5,'$dob',$time,'$sex','$address','$city','$email','Defence','$secqn','$secans','$q1','$a1','$q2','$a2','$q3','$a3','$q4','$a4','$q5','$a5')";

	if(mysql_query($str)) {
	header("Location:defencereg.php?result=Registered Successfully");
	} else {
	header("Location:defencereg.php?result=Failed to Register");
	}
?>