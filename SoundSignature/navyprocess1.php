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
    if(pointform.t1.value=="" || pointform.x1.value=="" || pointform.y1.value=="" || pointform.x2.value==""  || pointform.y2.value=="" || pointform.x3.value=="" || pointform.y3.value=="" || pointform.x4.value=="" || pointform.y4.value=="" || pointform.x5.value=="" || pointform.y5.value=="")
{
        alert("Missing Some Input");
}
    else
        {
            pointform.action="navyprocess2.php";
            pointform.submit();
        }
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
    ?>
   <form name="pointform" method="post">

        <table border="0" cellspacing="5" cellpadding="15" align="center" style="margin:auto;">
        <thead>
            <tr>
                <th style="background-color:yellow;color:maroon;font-weight:1200" colspan="2">NAVY REGISTRATION</th>
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
        </td>       
    </tr>
    <tr>
        <td>Play</td>
        <td> <embed src="Image/tiger.wmv" name="img1" autostart="false" width="400px" height="300px"></embed>
           
             <input type="button" name="start" value="start" onclick="fun()">
            <input type="button"  name="stop" value="stop" onclick="fun1()"></td>
    </tr>
    <tr>
        <td>Played Time</td>
        <td> <input type="text"  readonly="readonly" name="t1"></td>
    </tr>
    <tr>
        <th colspan="2"><input type="button" value="Proceed" style="background-color:white"  onclick="valid()"/></th>
        <!--th align="left"><input type="reset" value="Cancel" style="background-color:white" /></th-->
    </tr>
    </tbody>
    </table>

    </form>
    <br><br>
      <center>
    <a href="index.php"><img align="center" src="Image/home.jpg" width="100" height="31" alt="home"/>
       </a> &nbsp 
       <a href="navyregistration.php"><img align="center" src="Image/back.gif" width="100" height="31" alt="home"/>
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