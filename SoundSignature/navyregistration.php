<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Navy Registration</title>
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
        pointform.t1.value=a;
        timer=setTimeout("count()","1000");
    }
    function cleartime()
	{
		clearTimeout(timer);
	}

     function fun1()
    {
  //  f1.img1.loop=0;
 pointform.t1.value=a;
  cleartime();
  document.embeds[0].pause();
}
function valid()
{
    if(pointform.u1.value==""  || pointform.x1.value=="" || pointform.y1.value=="" || pointform.x2.value==""  || pointform.y2.value=="" || pointform.x3.value=="" || pointform.y3.value=="" || pointform.x4.value=="" || pointform.y4.value=="" || pointform.x5.value=="" || pointform.y5.value=="")
{
        alert("Missing Some Input");
}
    else
        {
            pointform.action="navyprocess1.php";
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
         
   <form name="pointform" method="post">

        <table border="0" cellspacing="5"   cellpadding="15"   align="center">
        <thead>
            <tr>
                <th style="background-color:yellow;color:maroon;font-weight:1200" colspan="2">NAVY REGISTRATION</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Username</td>
            <td><input type="text" name="u1" value="" /></td>
        </tr>
        <tr>
        <td>Select Image Positions</td>
        <td> 
            
<img src="Image/navy1.jpg"  onclick="point_it1(event)" id="cross1" height="200" width="200" >

<img src="Image/navy2.jpg" onclick="point_it2(event)" id="cross2" height="200" width="200" >

<img src="Image/navy3.jpg"  onclick="point_it3(event)" id="cross3" height="200" width="200" >

<img src="Image/navy4.jpg"  onclick="point_it4(event)" id="cross4" height="200" width="200" >

<img src="Image/navy5.jpg"  onclick="point_it5(event)" id="cross5" height="200" width="200" > 
       
   </td>
    </tr>
    <tr>
        <td>positions</td>
        <td>&nbsp;
        <input readonly type="text" name="x1" size="2" /><input readonly type="text" name="y1" size="2" /> &nbsp;
        <input readonly type="text" name="x2" size="2" /><input readonly type="text" name="y2" size="2" /> &nbsp;
        <input readonly type="text" name="x3" size="2" /><input readonly type="text" name="y3" size="2" /> &nbsp;
        <input readonly type="text" name="x4" size="2" /><input readonly type="text" name="y4" size="2" /> &nbsp;
        <input readonly type="text" name="x5" size="2" /><input readonly type="text" name="y5" size="2" /> &nbsp;
        </td>
       
    </tr>
    <!--tr>
        <td>Play</td>
        <td> <embed src="Image/tiger.wmv" name="img1" autostart="false"></embed>
           
             <input type="button" name="start" value="start" onclick="fun()">
            <input type="button"  name="stop" value="stop" onclick="fun1()"></td>
    </tr>
    <tr>
        <td>Played Time</td>
        <td> <input type="text"  readonly="readonly" name="t1"></td>
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
        <td><input type="password" name="secans" value="" /></td>
    </tr>
    <tr>
    </tr-->
    <tr>
        <th colspan="2"><input type="button" value="Proceed" style="background-color:white"  onclick="valid()"/>
        <input type="reset" value="Cancel" style="background-color:white" /></th>
    </tr>
    </tbody>
    </table>

    </form>
    <br><br>
      <center>
    <a href="index.php"><img align="center" src="Image/home.jpg" width="100" height="31" alt="home"/>
       </a> &nbsp 
       <a href="index.php"><img align="center" src="Image/back.gif" width="100" height="31" alt="home"/>
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