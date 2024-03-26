<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>AirForce Registration</title>
</head>   
    <script language="JavaScript">
        a=0;
    function fun()
    {
	count();
    document.embeds[0].play();    
    }
    function count()
    {
        a++;
        pointform.t1.value=a;
        timer=setTimeout("count()","1000");
    }
    function cleartime()
	{
		clearTimeout(timer);
	}

    function fun1() {
        //f1.img1.loop=0;
    pointform.t1.value=a;
    cleartime();
    document.embeds[0].pause();
    }
    
    function valid() {
    if(pointform.t1.value=="" || pointform.t2.value=="" ||  pointform.t6.value=="" || pointform.t7.value=="" || pointform.t8.value==""  || pointform.x1.value=="" || pointform.y1.value=="" || pointform.x2.value==""  || pointform.y2.value=="" || pointform.x3.value=="" || pointform.y3.value=="" || pointform.x4.value=="" || pointform.y4.value=="" || pointform.x5.value=="" || pointform.y5.value=="")
{
        alert("Missing Some Input");
        return false
}
    return true
    /*else
        {
            pointform.action="airprocess.php";
            pointform.submit();
        }*/
}
    </script>
<link rel="stylesheet" type="text/css" href="style.css" />
<body style="font-weight:700" text="darkblue">
<b>
 <div id="wrap">
<div id="header">
                <div id="logo">
		<h1 class="lineone"> 
</h1> 
		
                </div>
</div>
<div id ="navigation">
<?php
include_once "registration_menu.php";
?>
</div>
    <br><br>
    <?php
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
        $t1=$_POST["t1"];
    ?>
   <form name="pointform" action="airprocess.php" method="post">
        <table border="0" cellspacing="5" cellpadding="15" align="center" style="margin:auto;width:50%;">
        <thead>
            <tr>
                <th style="background-color:yellow;color:maroon;font-weight:1200" colspan="2">AIRFORCE REGISTRATION</th>
            </tr>
        </thead>
        <tbody>            
            <tr>        
        <td colspan="2">&nbsp;
        <input type="hidden" name="u1" value="<?php echo $name?>" />
        <input readonly type="hidden" name="x1" size="2" value="<?php echo $x1?>"/><input readonly type="hidden" name="y1" size="2" value="<?php echo $y1?>"/> &nbsp;
        <input readonly type="hidden" name="x2" size="2" value="<?php echo $x2?>"/><input readonly type="hidden" name="y2" size="2" value="<?php echo $y2?>"/> &nbsp;
        <input readonly type="hidden" name="x3" size="2" value="<?php echo $x3?>"/><input readonly type="hidden" name="y3" size="2" value="<?php echo $y3?>"/> &nbsp;
        <input readonly type="hidden" name="x4" size="2" value="<?php echo $x4?>"/><input readonly type="hidden" name="y4" size="2" value="<?php echo $y4?>"/> &nbsp;
        <input readonly type="hidden" name="x5" size="2" value="<?php echo $x5?>"/><input readonly type="hidden" name="y5" size="2" value="<?php echo $y5?>"/> &nbsp;
        <input type="hidden"  readonly="readonly" name="t1" value="<?php echo $t1?>">
        </td>       
    </tr>    
    <tr>
        <td>Date Of Birth</td>
        <td><input type="text" name="t2" value="" size="2" /><select name="t3">
                <option>Month</option>
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">Mar</option>
                <option value="4">Apr</option>
                <option value="5">May</option>
                <option value="6">Jun</option>
                <option value="7">Jul</option>
                <option value="8">Aug</option>
                <option value="9">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select><select name="t4">
                 <option>Year</option>
                	<?php
	for($i=1975; $i<=2020; $i++)
	echo "<option value=$i>$i</option>";
	?>
        </select></td>
    </tr>
    <tr>
        <td>Sex</td>
        <td><input type="radio" name="t5" value="Male" />Male<input type="radio" name="t5" value="Female" />Female</td>
    </tr>
    <tr>
        <td>Address</td>
        <td><textarea name="t6"></textarea></td>
    </tr>
    <tr>
        <td>City</td>
        <td><input type="text" name="t7" value="" /></td>
    </tr>
    <tr>
        <td>EMail</td>
        <td><input type="text" name="t8" value="" /></td>
    </tr>
    <tr>
        <td>Security Question</td>
        <td>
	<select name="secqn">
	<option value="Favourite Color">Favourite Color</option>
	<option value="First School">First School</option>
	<option value="Favourite Vacation">Favourite Vacation</option>
	</select>
        </td>
    </tr>
    <tr>
        <td>Answer</td>
        <td><input type="password" name="secans" value=""/></td>
    </tr>
    <tr>
        <td>Question1</td>
        <td><textarea name="q1" placeholder="Question1" required></textarea></td>
    </tr>
    <tr>
        <td>Answer1</td>
        <td><input type="text" name="a1" required></td>
    </tr>
    <tr>
        <td>Question2</td>
        <td><textarea name="q2" placeholder="Question2" required></textarea></td>
    </tr>
    <tr>
        <td>Answer2</td>
        <td><input type="text" name="a2" required></td>
    </tr>
    <tr>
        <td>Question3</td>
        <td><textarea name="q3" placeholder="Question3" required></textarea></td>
    </tr>
    <tr>
        <td>Answer3</td>
        <td><input type="text" name="a3" required></td>
    </tr>
    <tr>
        <td>Question4</td>
        <td><textarea name="q4" placeholder="Question4" required></textarea></td>
    </tr>
    <tr>
        <td>Answer4</td>
        <td><input type="text" name="a4" required></td>
    </tr>
    <tr>
        <td>Question5</td>
        <td><textarea name="q5" placeholder="Question5" required></textarea></td>
    </tr>
    <tr>
        <td>Answer5</td>
        <td><input type="text" name="a5" required></td>
    </tr>
    <tr>
        <th colspan="2"><input type="submit" value="Register" style="background-color:white;"/></th>        
    </tr>
    </tbody>
    </table>

    </form>
    <br><br>
      <center>
    <a href="index.php"><img align="center" src="Image/home.jpg" width="100" height="31" alt="home"/>
       </a> &nbsp 
       <a href="airreg.php"><img align="center" src="Image/back.gif" width="100" height="31" alt="home"/>
       </a>
      </center>
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