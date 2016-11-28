<!DOCTYPE HTML>
<HTML>
<HEAD>
	<title>Thomas Bayet</title>
	<link rel="stylesheet" type="text/css" href="cv.css"/>
	<script src="tools.js"></script>
</HEAD>
<BODY onload="resizeVideo()" onresize="resizeVideo();refreshnav();">
	<video id="videofond" style="padding: 0px; margin: 0px; position:fixed; left:0; top:0; min-width:100%; z-index: -1" autoplay="" loop="" muted="">
		<source src="http://www.lamoutarde.fr/wp-content/themes/daynnight/videos/working.mp4" type="video/mp4" />
	</video>
	<ul class="navbar" id="navbar">
		<li><a href="#content">Home</a></li>
		<li><a href="#stud">Studies</a></li>
		<li><a href="#jobs">Jobs</a></li>
		<li><a href="#creations">Creations</a></li>
		<li><a href="#jobs">Jobs</a></li>
		<li><a href="#contact">Contact</a></li>
		<li class="icon">
			<a href="javascript:void(0);" onclick="openNav()">&#9776;</a>
		</li>
	</ul>
	<div id="profil">
		<img id="avatar" src="avatar.jpg" alt="Photo d'identit�" onmouseover='zoom("avatar", 1)' onmouseleave='zoom("avatar", 0)' />
		<div style="display:inline-block; vertical-align:top;">
		<h2>Thomas Bayet</h2>
		<h3><?php echo((date("Y") - 1991) - ((date("m") - 7 > 0) ? 0 : 1)); ?> Ans</h3>
		</div>
		<div style="display:inline-block; vertical-align:top;">
			<p>LINKEDIN</p>
		</div>
	</div>
	
	<div id="banner" onscroll="refreshnav()">
		<div id="content">
			<div id="navbardiv"></div>
			<div class="box">
				<canvas id="ring" width="100" height="100" onclick='drawcircle("ring", 10, "C");'
				onmouseover='zoom("ring", 1)' onmouseleave='zoom("ring", 0)'>
				</canvas>
				<canvas id="ring2" width="100" height="100" onclick='drawcircle("ring2", 25, "js");'
				onmouseover='zoom("ring2", 1)' onmouseleave='zoom("ring2", 0)'>
				</canvas>
				<canvas id="ring3" width="100" height="100" onclick='drawcircle("ring3", 50, "shell");'
				onmouseover='zoom("ring3", 1)' onmouseleave='zoom("ring3", 0)'>
				</canvas>
				<canvas id="ring4" width="100" height="100" onclick='drawcircle("ring4", 75, "java");'
				onmouseover='zoom("ring4", 1)' onmouseleave='zoom("ring4", 0)'>
				</canvas>
			</div>
			<div id="creations" class="box">
				<canvas id="rect" width="300" height="60" onclick='drawrect("rect", 50, "shell");'>
			</div>
			<div class="box">dfsAAAfsff</div>
			<div class="box">dfsfsdfsf</div>
			<div class="box">dfdsfsdfsfs</div>
			<div class="box">dfsfsdfsf</div>
			<div id="contact" class="box">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12475.671361035467!2d2.292143048937684!3d48.902305214780554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f7d03e984ab%3A0xce1d395e61609e94!2sGare+d&#39;Asnieres!5e0!3m2!1sfr!2sfr!4v1480010074851"
			 width="100%" height="300px" frameborder="0" style="border:0; margin:0; border-radius: 5px;" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<script src="tools.js"></script>
	<script>
	function zoom(id, isin)
	{
		var elem = document.getElementById(id);
		if (isin == 0)
			elem.style.transform = "scale(1)";
		else
			elem.style.transform = "scale(1.10)";
	}
	"use strict";
		var content = document.getElementById("content");
		var navbar = document.getElementById("navbar");
		var navbardiv = document.getElementById("navbardiv");
		var banner = document.getElementById("banner");
		var profil = document.getElementById("profil");
		var videofond = document.getElementById("videofond");
		refreshnav();
		drawrect("rect", 65, "shell");
		drawcircle("ring", 10, "C");
		drawcircle("ring2", 25, "js");
		drawcircle("ring3", 50, "shell");
		drawcircle("ring4", 75, "java");
		function openNav() {
			if (navbar.className === "navbar")
				navbar.className += " responsive";
			else
				navbar.className = "navbar";
		}
		function resizeVideo()
		{
			var x = document.body.clientWidth;
			var y = document.documentElement.clientHeight;
			if (x < y)
			{
				profil.style.height= "17vh";
				profil.style.width= "100vw";
				profil.style.textAlign = "left";
				banner.style.top = "17vh";
				banner.style.width = "100%";
			}
			else
			{
				profil.style.height= "100vh";
				profil.style.width= "20vw";
				profil.style.textAlign = "center";
				banner.style.top = "0";
				banner.style.width = "80%";
			}
			if (x >= videofond.clientWidth)
			{
				videofond.style.width = x + "px";
			}
			else if (y > videofond.clientHeight)
			{
				videofond.style.height = y + "px";
			}
			if (x < videofond.clientWidth)
				videofond.style.left = (x - videofond.clientWidth) / 2 + "px";
			refreshnav();
		}
		function refreshnav()
		{
			var dim = navbardiv.getBoundingClientRect();
			var dimTop = 0;
			if (profil.style.textAlign === "left")
				dimTop = profil.clientHeight;
			if (dim.top <= dimTop)
			{
				if (navbardiv.hasChildNodes() == true)
				{
					navbardiv.removeChild(navbar);
					document.body.insertBefore(navbar, profil);
				}
				navbar.style.position = "fixed";
				navbar.style.top = dimTop + "px";
				navbar.style.right = "0px";
				navbar.style.width = content.clientWidth - 6 + "px";
			}
			else
			{
				if (navbardiv.hasChildNodes() == false)
				{
					document.body.removeChild(navbar);
					navbardiv.appendChild(navbar);
				}
				navbar.style.position = "relative";
				navbar.style.top = "auto";
				navbar.style.right = "auto";
				navbar.style.width = "auto";
			}
		}
	</script>
</BODY>
</HTML>
