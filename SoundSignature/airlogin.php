<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AirForce Login</title>
    </head>
     <script language="JavaScript">
function point_it1(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross1").style.left = (pos_x-1) ;
	document.getElementById("cross1").style.top = (pos_y-15) ;
	document.getElementById("cross1").style.visibility = "visible" ;
	document.pointform.x1.value = pos_x;
	document.pointform.y1.value = pos_y;
}
function point_it2(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross2").style.left = (pos_x-1) ;
	document.getElementById("cross2").style.top = (pos_y-15) ;
	document.getElementById("cross2").style.visibility = "visible" ;
	document.pointform.x2.value = pos_x;
	document.pointform.y2.value = pos_y;
}
function point_it3(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross3").style.left = (pos_x-1) ;
	document.getElementById("cross3").style.top = (pos_y-15) ;
	document.getElementById("cross3").style.visibility = "visible" ;
	document.pointform.x3.value = pos_x;
	document.pointform.y3.value = pos_y;
}
function point_it4(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross4").style.left = (pos_x-1) ;
	document.getElementById("cross4").style.top = (pos_y-15) ;
	document.getElementById("cross4").style.visibility = "visible" ;
	document.pointform.x4.value = pos_x;
	document.pointform.y4.value = pos_y;
}
function point_it5(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross5").style.left = (pos_x-1) ;
	document.getElementById("cross5").style.top = (pos_y-15) ;
	document.getElementById("cross5").style.visibility = "visible" ;
	document.pointform.x5.value = pos_x;
	document.pointform.y5.value = pos_y;

}
  a=0;
    function fun()
    {
    count();
    document.embeds[0].play();
    }
    function count()
    {
        a++;
        pointform.t2.value=a;
        timer=setTimeout("count()","1000");
    }
    function cleartime()
	{
		clearTimeout(timer);
	}

     function fun1()
    {
  //  f1.img1.loop=0;
 pointform.t2.value=a;
  cleartime();
  document.embeds[0].pause();
}
function valid()
{
      if(pointform.t1.value=="" || pointform.t2.value=="")

{
        alert("Missing Some Input");
}
    else
        {
            pointform.action="airloginprocess1.php";
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
                        <th colspan="2">AIRFORCE LOGIN</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>UserName</td>
                        <td><input type="text" name="t1" value=""/></td>
                    </tr>
                   <tr>
        <td>Select Image Positions</td>
        <td>
            <?php
                $sd=0;

                do {
                $sd=rand(0,4);
                } while($sd>=5);
                
                if($sd==0) {
                ?>

<img src="Image/air1.jpg"  onclick="point_it1(event)" id="cross1" height="200" width="200" >
<br><input readonly type="text" name="x1" size="2" value="0" /><input readonly type="text" name="y1" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x2" size="2" value="-100" /><input readonly type="hidden" name="y2" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x3" size="2" value="-100" /><input readonly type="hidden" name="y3" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x4" size="2" value="-100" /><input readonly type="hidden" name="y4" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x5" size="2" value="-100" /><input readonly type="hidden" name="y5" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php                    
}               
if($sd==1) {
?>
<img src="Image/air2.jpg" onclick="point_it2(event)" id="cross2" height="200" width="200" >
<br><input readonly type="hidden" name="x1" size="2" value="-100" /><input readonly type="hidden" name="y1" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="text" name="x2" size="2" value="0" /><input readonly type="text" name="y2" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x3" size="2" value="-100" /><input readonly type="hidden" name="y3" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x4" size="2" value="-100" /><input readonly type="hidden" name="y4" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x5" size="2" value="-100" /><input readonly type="hidden" name="y5" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php   
                } 
                if($sd==2) {
                    ?>
<img src="Image/air3.jpg"  onclick="point_it3(event)" id="cross3" height="200" width="200" >
<br><input readonly type="hidden" name="x1" size="2" value="-100" /><input readonly type="hidden" name="y1" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x2" size="2" value="-100" /><input readonly type="hidden" name="y2" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x3" size="2" value="0" /><input readonly type="text" name="y3" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x4" size="2" value="-100" /><input readonly type="hidden" name="y4" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x5" size="2" value="-100" /><input readonly type="hidden" name="y5" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
                } 
                if($sd==3) {
                    ?>
<img src="Image/air4.jpg"  onclick="point_it4(event)" id="cross4" height="200" width="200" >
<br><input readonly type="hidden" name="x1" size="2" value="-100" /><input readonly type="hidden" name="y1" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x2" size="2" value="-100" /><input readonly type="hidden" name="y2" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x3" size="2" value="-100" /><input readonly type="hidden" name="y3" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x4" size="2" value="0" /><input readonly type="text" name="y4" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x5" size="2" value="-100" /><input readonly type="hidden" name="y5" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php                } 
                if($sd==4) {
                    ?>
<img src="Image/air5.jpg"  onclick="point_it5(event)" id="cross5" height="200" width="200" >
<br><input readonly type="hidden" name="x1" size="2" value="-100" /><input readonly type="hidden" name="y1" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x2" size="2" value="-100" /><input readonly type="hidden" name="y2" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x3" size="2" value="-100" /><input readonly type="hidden" name="y3" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="hidden" name="x4" size="2" value="-100" /><input readonly type="hidden" name="y4" size="2" value="-100" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly type="text" name="x5" size="2" value="0" /><input readonly type="text" name="y5" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
?>


   </td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;
        <!--input readonly type="text" name="x1" size="2" value="0" /><input readonly type="text" name="y1" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x2" size="2" value="0" /><input readonly type="text" name="y2" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x3" size="2" value="0" /><input readonly type="text" name="y3" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x4" size="2" value="0" /><input readonly type="text" name="y4" size="2" value="0" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input readonly type="text" name="x5" size="2" value="0" /><input readonly type="text" name="y5" size="2" value="0" /--> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>

    </tr>
    <tr>
        <td>Play</td>
        <td> <embed src="Image/tiger.wmv" name="img1" autostart="false"></embed>

             <input type="button" name="start" value="start" onclick="fun()">
            <input type="button"  name="stop" value="stop" onclick="fun1()"></td>
    </tr>
    <tr>
        <td>Played Time</td>
        <td> <input type="text" readonly="readonly" name="t2"></td>
    </tr>
                        <tr>
                        <th colspan="2"><input type="button" value="Proceed" onclick="valid()" />
                        <input type="reset" value="Cancel" /></td>
                    </tr>
                </tbody>
            </table>
                
        </form>
       <center> <a  href="index.php"><img src="Image/home.jpg" width="128" height="31" alt="home"/>
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