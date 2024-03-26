<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
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
    </head>
    <body text="darkblue">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTEGRATION OF SOUND SIGNATURE IN GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
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
<li><a href="index.php">Home</a></li>
<li><a href="adminlogin.php">Admin Login</a></li>
<li class="last"><a href="airreg.php">Registration</a></li>
<!--li class="last"><a href="homepage.php">Log Out</a></li-->
</ul>
</div>
<br><br>
<img  align="right" src="Image/india.jpg" width="200" height="200" alt="indani"/>
<img  align="left" src="Image/india.jpg" width="200" height="200" alt="indani"/>
   <font face="Monotype Corsiva" size="5"></font>
       
    <table border="0" cellpadding="10" align="center" cellspacing="10" width="50%">
        <tr>
            <th style="border-color:blue" id="Lnk"  colspan="3" >LOGIN PAGE</th>
        </tr>
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <th>Login Type</th>
                <th>Login</th>
                <th>Mail Login</th>
            </tr>
            <!--tr>
                <th>Admin Login</th>
                <th><a href="adminlogin.php"><img src="Image/admin_1.gif" width="100" height="100" alt="air"/></a></th>
                <th></th>
            <tr-->
                <th align="right">AirForce Login</th>
                <th><a href="airlogin.php"><img src="Image/air4.jpg" width="100" height="100" alt="air"/></a></th>
                <th><a href="maillogin.php?field=AirForce"><img src="Image/air1.jpg" width="100" height="100" alt="air"/></a></th>
            </tr>
            <tr>
                <th align="right">Defence Login</th>
                <th><a href="defencelogin.php"><img src="Image/dence2.jpg" width="100" height="100" alt="defence"/></a></th>
                <th><a href="maillogin.php?field=Defence"><img src="Image/defence5.jpg" width="100" height="100" alt="defence"/></a></th>
            </tr>
            <tr>
                <th align="right">Navy Login</th>
                <th><a href="navylogin.php"><img src="Image/navy4.jpg" width="100" height="100" alt="Navy"/></a></th>
                <th><a href="maillogin.php?field=Navy"><img src="Image/navy2.jpg" width="100" height="100" alt="Navy"/></a></th>
            </tr>
                   </tbody>
    </table>
    <div>
          <img align="right"  src="Image/admin.gif" width="150" height="110" alt="admin"/>
    </div>  
    </body>
</html>