<?php
session_start();
include_once "db.php";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Defence Login</title>
    </head>
     <script language="JavaScript">
function valid() {
        if(pointform.ans.value=="") {
            alert("Missing Some Input");
        } else {
            pointform.action="defenceloginprocess.php";
            pointform.submit();
        }
}
</script>
<body text="maroon">
        <b>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTEGRATION OF SOUND SIGNATURE IN GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
<li><a href="airreg.php">Registration</a></li>
<li class="last"><a href="loginpage.php">Login</a></li>
</ul>
</div>
        <form name="pointform" method="post">
            <table border="1" align="center" style="margin:auto;">
                <thead>
                    <tr>
                        <th colspan="2">DEFENCE LOGIN</th>
                      
                    </tr>
                </thead>
                <tbody>
<tr>
        <td>Question</td>
        <td>
            <?php
                $name = $_POST['t1'];
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
                echo "<input type='hidden' name='t1' value='$name'>";
                echo "<input type='hidden' name='x1' value='$x1'>";
                echo "<input type='hidden' name='y1' value='$y1'>";
                echo "<input type='hidden' name='x2' value='$x2'>";
                echo "<input type='hidden' name='y2' value='$y2'>";
                echo "<input type='hidden' name='x3' value='$x3'>";
                echo "<input type='hidden' name='y3' value='$y3'>";
                echo "<input type='hidden' name='x4' value='$x4'>";
                echo "<input type='hidden' name='y4' value='$y4'>";
                echo "<input type='hidden' name='x5' value='$x5'>";
                echo "<input type='hidden' name='y5' value='$y5'>";
                echo "<input type='hidden' name='t2' value='$tm'>";
                $seed=1;
                do {
                    $seed = rand(1, 5);
                } while($seed>5);
                echo "<input type='hidden' name='seed' value='$seed'>";
                $rs = mysql_query("select ques1,ques2,ques3,ques4,ques5 from soundreg where name='$name'");
                if(mysql_num_rows($rs) >0) {
                $r = mysql_fetch_row($rs);
                if($seed==1) {
                    echo "<textarea name='q1' cols='30' rows='4' readonly>$r[0]</textarea>";
                } else if($seed==2) {
                    echo "<textarea name='q2' cols='30' rows='4' readonly>$r[1]</textarea>";
                } else if($seed==3) {
                    echo "<textarea name='q3' cols='30' rows='4' readonly>$r[2]</textarea>";
                } else if($seed==4) {
                    echo "<textarea name='q4' cols='30' rows='4' readonly>$r[3]</textarea>";
                } else if($seed==5) {
                    echo "<textarea name='q5' cols='30' rows='4' readonly>$r[4]</textarea>";
                }                
            ?>            
        </td>
    </tr>
    <tr>
        <td>Your Answer</td>
        <td><input type="text" name="ans" autofocus required></td>
    </tr>
    <tr>
        <th colspan="2"><input type="button" value="Login" onclick="valid()"/></th>
        <?php
        } else {
            echo "<h1>Invalid Name...!</h1>";
        }
        ?>
    </tr>
    </tbody>
    </table>                
        </form>
       <center> <a  href="defencelogin.php"><img src="Image/back.gif" width="128" height="31" alt="home"/>
       </a></center>
     <?php
    if(isset($_GET['result'])) {
    ?>
    <center>
    <font color="blue">
     <?php
	echo $_GET['result'];
	?>
    </font>
    <?php
    }
    ?>
    </center>
    </body>
</html>