<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script type="text/javascript">

	c=new Array("Image/air123.jpg","Image/navy1.jpg","Image/defence-1.jpg","Image/navy3.jpg","Image/air3.jpg","Image/defence5.jpg","Image/indian-navy.jpg","Image/navy1.jpg","Image/defence3.jpg","Image/air4.jpg","Image/navy1.jpg","Image/air5.jpg","Image/navy5.jpg");

	var i=0,t;

	function randomBg()
	{

		if(i>c.length-1)
		{
		i=0;
		}
		//document.body.background=c[i];
		document.getElementById('h').innerHTML="<img src="+c[i]+" height='100' width='150'>";

		i++;

		t=setTimeout("randomBg()","3000");

	}

	function stopbg()
	{

		clearTimeout(t);
	}
</script>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTEGRATION OF SOUND SIGNATURE IN GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body onload="randomBg()"  onunload="stopbg()">
<div id="wrap">
<div id="header">
                <div id="logo">
		<h1 class="lineone"> 
</h1> 
		
                </div>
</div>
<div id ="navigation">
<?php
include_once "topmenu.php";
?>
</div>
<div id="left">
<h2>IMAGE SHOW</h2>
<ul style="margin-top:10px;">
    <div id="h"></div>
<!--<li class="first"><a href="http://www.getcsstemplates.com" class="active">Free CSS Templates</a></li>
<li><a href="http://joomlacmstemplates.blogspot.com">Joomla 1.5 Templates</a></li>
<li><a href="http://businesswebsitetemplates.blogspot.com">Business Templates</a></li>
<li><a href="http://web20templates.blogspot.com">Web 2.0 Templates</a></li>
<li><a href="#">More Links</a></li>-->
</ul>


<div id="latest-news">
<h2>News &amp; Updates </h2>
<p class="date">Jun 16. 09.</p>
<li><a href="airlogin.php">AirForce Login</a></li>
<li><a href="defencelogin.php">Defence Login</a></li>
<li><a href="navylogin.php">Navy Login</a></li>
<p class="date">Jun.05.09</p>
<p>Nunc euismod, felis et adipiscing volutpat, mauris ligula lacinia lacus ac accumsan pede lacus sed nulla.</p>
</div>
</div>
<div id="right">
<h2 align="center">Graphical Password Authentication System</h2>
<img src="Image/img4.png" class="floatTL" alt="aviation" />
<p>A  graphical password system with a supportive sound signature to increase the remembrance of the password is discussed. In proposed work a click-based graphical password scheme called Cued Click Points (CCP) is presented. In this system a password consists of sequence of some images in which user can select one click-point per image. In addition user is asked to select a sound signature corresponding to click point this sound signature will be used to help the user to login. System showed very good Performance in terms of speed, accuracy, and ease of use. Users preferred CCP to Pass Points, saying that selecting and remembering only one point per image was easier and sound signature helps considerably in recalling the click points.</p>
<div class="box">
<h3 align="center">AIRFORCE</h3>
<img src="Image/air1.jpg" height="100" width="150" alt="AirForce" />
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec rutrum neque eu nisl. Morbi eget felis. Vestibulum feugiat lectus ut magna. Ut interdum ipsum nec metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut eget augue in velit elementum bibendum.</p>
</div>
<div class="box">
<h3 align="center">DEFENCE</h3>
<img src="image/dence2.jpg" height="100" width="150" alt="Defence" />
<p>Indian Defense an extreme compassionate grounds like ailing my parents without fulfilling of service. my service is 8 1/2 years. at the time of my discharge no one look after my ailing parents. after retirement also i could not saved my father who was passed away few months back. </p>
</div>
<div class="box">
<h3 align="center">NAVY</h3>
<img src="Image/navy1.jpg" height="100" width="150" alt="Navy" />
<p>The Navy Reserve Policy requires reservists to submit a travel claim within 5 business days after returning to their home regional travel office. Unfortunately, the Navy Reserve has more than $30 million in funds appropriated to support the training of the Navy Reserve Force, which is tied up in unliquidated transactions. </p>
</div>
</div>
<div id="footer">
Copyright &copy; 2014 <a href="#"></a>
</div>
<div class="clear"></div>
</div>
</body>
</html>
