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
		<li><a href="#timeline">Timeline</a></li>
		<li><a href="#interest">Centres d'int&eacute;r&ecirc;ts</a></li>
		<li><a href="#langs">Langues</a></li>
		<li><a href="#knowledge">Connaissances</a></li>
		<li><a href="#skills">Comp&eacute;tences</a></li>
		<li><a href="#contact">Contact</a></li>
		<li class="icon">
			<a href="javascript:void(0);" onclick="openNav()">&#9776;</a>
		</li>
	</ul>
	<div id="profil">
		<img id="avatar" src="avatar.jpg" alt="Photo d'identité" onmouseover='zoom("avatar", 1)' onmouseleave='zoom("avatar", 0)' />
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
			<div id="timeline" class="box">
				<table style="width:100%;"><tr style="width:100%;">
					<td style="width:10%;">
						<img id="img06" class="imgtime" src="42.jpg" onclick='deploy("tdtime", "div06");' onmouseover='zoom("img06", 1)' onmouseleave='zoom("img06", 0)' />
						<img id="img05" class="imgtime" src="guitar.jpg" onclick='deploy("tdtime", "div05");' onmouseover='zoom("img05", 1)' onmouseleave='zoom("img05", 0)' />
						<img id="img04" class="imgtime" src="webcitrus.jpeg" onclick='deploy("tdtime", "div04");' onmouseover='zoom("img04", 1)' onmouseleave='zoom("img04", 0)' />
						<img id="img03" class="imgtime" src="ub.jpg" onclick='deploy("tdtime", "div03");' onmouseover='zoom("img03", 1)' onmouseleave='zoom("img03", 0)' />
						<img id="img02" class="imgtime" src="iut.jpg" onclick='deploy("tdtime", "div02");' onmouseover='zoom("img02", 1)' onmouseleave='zoom("img02", 0)' />
						<img id="img01" class="imgtime" src="lhf.png" onclick='deploy("tdtime", "div01");' onmouseover='zoom("img01", 1)' onmouseleave='zoom("img01", 0)' />
					</td>
					<td id="tdtime" style="border-left-style:solid;">
						<div id="div01" class="timediv">
							<h4>2008-2009</h4>
							<img src="bac.jpg" width="300px" />
							<p>Obtention du <b>Baccalauréat Scientifique</b> au lycée Hippolyte Fontaine à Dijon.
							J'y ai choisi de suivre le cursus avec l'option SVT, spécialisation Mathématiques, et un module facultatif d'Art.
							J'ai étudié le grec ancien et le latin.</p>
						</div>
						<div id="div02" class="timediv">
							<h4>2009-2011</h4>
							<p>Obtention du <b>Diplôme Universitaire Technologique (DUT) en informatique</b> à l'IUT de Dijon.
							Le cursus principal initie brièvement aux bases dont l'intéraction matériel-logiciel, le binaire, le C et le Shell.
							La globalité des cours portent ensuite sur l'algorithmique, l'embarqué, la programmation objet orienté (POO), les bases de données et les diagrammes.
							En plus de l'informatique, la formation offre une diversité de modules, nous interessant aussi bien au droit et à l'économie 
							qu'à la communication, au management, à l'anglais ou aux mathématiques.</p>
							<p>Nous avons réalisé des projets seuls: <i>un Kalaha (jeu de plateau africain) Player.vs.Computer en java</i>, ou en groupe: <i>un moteur 2D de jeux en C#</i>.
							Le cursus se concluant par un stage de 11 semaines que j'ai effectué au service informatique du Conseil Régionnal de Bourgogne,
							afin de reprendre le développement d'un programme existant sur l'intranet pour la gestion de projets et de soummettre un cahier des charges visant à remplacer cet outil.</p>
							<p>J'ai pris part à la vie associative de l'iut en rejoignant l'ETIQ (ETudiant InformatiQue) :
								<ul>
									<li>Organisation du local et des activités proposées</li>
									<li>Organisation d'évènements (intégrations, soirées étudiantes, fêtes de fin d'année)</li>
									<li>Organisation du festival .dijon//SAITEN</li>
								</ul>
							</p>
						</div>
						<div id="div03" class="timediv">
							<h4>2011-2012</h4>
							<p>Souhaitant améliorer mon niveau d'étude et mes compétences, j'ai rejoins le cursus de la Licence mathématique-informatique à l'Université de Bourgogne.
							Malheureusement, l'éventail et la qualité des cours m'a terriblement déçu: très peu de lessons d'informatique et un niveau trop bas, donc ennuyant.
							Je n'ai donc fait qu'un semestre, mais ai pu cependant réaliser quelques projets interessants
								<ul>
									<li>Simulation d'un robot aspirateur avec interface graphique en java</li>
									<li>Modélisation en 3D d'un jeu d'échecs en POV-Ray</li>
								</ul>
							</p>
						</div>
						<div id="div04" class="timediv">
							<h4>2012-2013</h4>
							<p>La personne avec qui j'ai travaillé sur le projet du moteur de jeux 2D m'a proposé de l'utiliser pour développer un jeu de rythme.
							Nous avons lancé une campagne de financement participatif sur Ulule afin de nous aider à monter une entreprise. La société Webcitrus
							démarre ainsi son activité en février 2013:
							<ul>
								<li>Dépannage et cours d'informatique à domicile (déplacements en vélo)</li>
								<li>Développement logiciel pour professionnels.</li>
								<li>Vente/conseils de matériel et montage d'ordinateurs</li>
								<li>Création du jeu vidéo 8bit the musical</li>
							</ul></p>
						</div>
						<div id="div05" class="timediv">
							<h4>2014-2015</h4>
							<p>Jeux-vidéo / Musique / Voyage</p>
						</div>
						<div id="div06" class="timediv">
							<h4>2015-Aujourd'hui</h4>
							<p>Ecole 42</p>
						</div>
					</td>
				</tr></table>
			</div>
			<div id="interest" class="box">
				<h4>Centres d'int&eacute;r&ecirc;ts</h4>
				
			</div>
			<div class="box">
				dfsAAAfsff
			</div>
			<div id="langs" class="box" style="align:center; text-align:center; vertical-align:top;">
				<h4>Languages</h4>
				<table style="display:inline-table;border-bottom-style:solid;"><tr>
					<td>Anglais</td>
					<td style="border-left-style:solid;">
						<figure><figcaption>talking</figcaption>
						<canvas id="bar" width="200" height="15"></canvas></figure>
						<figure><figcaption>listening</figcaption>
						<canvas id="bar2" width="200" height="15"></canvas></figure>
						<figure><figcaption>writing</figcaption>
						<canvas id="bar3" width="200" height="15"></canvas></figure>
						<figure><figcaption>reading</figcaption>
						<canvas id="bar4" width="200" height="15"></canvas></figure>
					</td>
				</tr></table>
				<table style="display:inline-table;border-bottom-style:solid;"><tr>
					<td>Fran&ccedil;ais</td>
					<td style="border-left-style:solid;">
						<figure><figcaption>native</figcaption>
						<canvas id="bar5" width="200" height="15"></canvas></figure>
					</td>
				</tr></table>
				
			</div>
			<div id="knowledge" class="box">
				<h4>Connaissances</h4>
				<canvas id="ring" width="100" height="100" onclick='drawcircle("ring", 85, "C");'
				onmouseover='zoom("ring", 1)' onmouseleave='zoom("ring", 0)'></canvas>
				<canvas id="ring2" width="100" height="100" onclick='drawcircle("ring2", 65, "unix");'
				onmouseover='zoom("ring2", 1)' onmouseleave='zoom("ring2", 0)'></canvas>
				<canvas id="ring3" width="100" height="100" onclick='drawcircle("ring3", 90, "html");'
				onmouseover='zoom("ring3", 1)' onmouseleave='zoom("ring3", 0)'></canvas>
				<canvas id="ring4" width="100" height="100" onclick='drawcircle("ring4", 55, "css");'
				onmouseover='zoom("ring4", 1)' onmouseleave='zoom("ring4", 0)'></canvas>
				<canvas id="ring5" width="100" height="100" onclick='drawcircle("ring5", 75, "js");'
				onmouseover='zoom("ring5", 1)' onmouseleave='zoom("ring5", 0)'></canvas>
				<canvas id="ring6" width="100" height="100" onclick='drawcircle("ring6", 30, "php");'
				onmouseover='zoom("ring6", 1)' onmouseleave='zoom("ring6", 0)'></canvas>
				<canvas id="ring7" width="100" height="100" onclick='drawcircle("ring7", 20, "java");'
				onmouseover='zoom("ring7", 1)' onmouseleave='zoom("ring7", 0)'></canvas>
				<canvas id="ring8" width="100" height="100" onclick='drawcircle("ring8", 30, "c++");'
				onmouseover='zoom("ring8", 1)' onmouseleave='zoom("ring8", 0)'></canvas>
				<canvas id="ring9" width="100" height="100" onclick='drawcircle("ring9", 15, "c#");'
				onmouseover='zoom("ring9", 1)' onmouseleave='zoom("ring9", 0)'></canvas>
			</div>
			<div id="skills" class="box">
				<h4>Comp&eacute;tences</h4>
				<div>
				<canvas id="rect" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect2" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect3" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect4" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect5" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect6" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect7" class = "c_rect" width="300" height="60"></canvas>
				<canvas id="rect8" class = "c_rect" width="300" height="60"></canvas>
				</div>
			</div>
			<div id="contact" class="box">
				<h4>Contact</h4>
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
		simplebar("bar", 25);
		simplebar("bar2", 70);
		simplebar("bar3", 60);
		simplebar("bar4", 90);
		simplebar("bar5", 99);

		drawrect("rect", 55, "Rigor");
		drawrect("rect2", 100, "Creativity");
		drawrect("rect3", 33, "Organization");
		drawrect("rect4", 70, "Adaptability");
		drawrect("rect5", 85, "Relational");
		drawrect("rect6", 67, "Analysis");
		drawrect("rect7", 60, "Enthusiasm");
		drawrect("rect8", 93, "Maturity");

		drawcircle("ring", 85, "C");
		drawcircle("ring2", 65, "unix");
		drawcircle("ring3", 90, "html");
		drawcircle("ring4", 55, "css");
		drawcircle("ring5", 75, "js");
		drawcircle("ring6", 30, "php");
		drawcircle("ring7", 20, "java");
		drawcircle("ring8", 30, "c++");
		drawcircle("ring9", 15, "c#");
		
		function deploy(div, divchild)
		{
			var child = document.getElementById(divchild);
			var parent = document.getElementById(div);
			var children = parent.children;
			var i = 0;
			var inter;
			var opacity;

			while (i < children.length)
			{
				if (children[i].style.display.localeCompare("none") != 0)
					children[i].style.display = "none";
				i++;
			}
			child.style.opacity = 0;
			child.style.display = "block";
			opacity = 0;
			inter = setInterval(changeOpacity, 100, child);

			function changeOpacity(elem)
			{
				elem.style.opacity = opacity;
				if (opacity > 1)
				{
					clearInterval(inter);
				}
				opacity += 0.1;
			}
		}
		
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
