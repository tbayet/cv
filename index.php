<!DOCTYPE HTML>
<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>Thomas Bayet</title>
	<link rel="stylesheet" type="text/css" href="cv.css"/>
	<link rel="icon" type="image/png" href="favicon.png" />
	<script src="tools.js"></script>
	<script src="comp.js"></script>
</HEAD>
<BODY onload="resizeVideo()" onresize="resizeVideo();refreshnav();">
	<video id="videofond" style="padding: 0px; margin: 0px; position:fixed; left:0; top:0; min-width:100%; z-index: -1" autoplay="" loop="" muted="">
		<source src="http://www.lamoutarde.fr/wp-content/themes/daynnight/videos/working.mp4" type="video/mp4" />
	</video>
	<ul class="navbar" id="navbar">
		<li><a href="#timeline">Timeline</a></li>
		<li><a href="#interest">Centres d'intérêt</a></li>
		<li><a href="#langs">Langues</a></li>
		<li><a href="#knowledge">Connaissances</a></li>
		<li><a href="#skills">Compétences</a></li>
		<li><a href="#contact">Contact</a></li>
		<li class="icon">
			<a href="javascript:void(0);" onclick="openNav()">&#9776;</a>
		</li>
	</ul>
	<div id="profil">
		<img id="avatar" src="img/avatar.jpg" alt="Photo d'identité" onmouseover='zoom("avatar", 1)' onmouseleave='zoom("avatar", 0)' />
		<div style="display:inline-block; vertical-align:top;">
			<h2>Thomas Bayet</h2>
			<h3><?php echo((date("Y") - 1991) - ((date("m") - 7 > 0) ? 0 : 1)); ?> Ans</h3>
		</div>
		<div id="sites">
			<a href="http://www.linkedin.com/in/tbayet" target="_blank"><img width="90%" src="img/linked.png" /></a>
			<a href="https://github.com/tbayet" target="_blank"><img width="90%" src="img/github.png" /></a>
		</div>
	</div>
	
	<div id="banner" onscroll="refreshnav()">
		<div id="content">
			<div id="navbardiv"></div>
			<div id="timeline" class="box">
				<table style="width:100%;border-spacing: 0;"><tr>
					<td style="width:10%;">
						<img id="img06" class="imgtime" tabindex="-1" src="img/42.jpg" onclick='deploy("tdtime", "div06", "img06");' onmouseover='zoom("img06", 1)' onmouseleave='zoom("img06", 0)' />
						<img id="img05" class="imgtime" tabindex="-1" src="img/guitar.jpg" onclick='deploy("tdtime", "div05", "img05");' onmouseover='zoom("img05", 1)' onmouseleave='zoom("img05", 0)' />
						<img id="img04" class="imgtime" tabindex="-1" src="img/webcitrus.jpeg" onclick='deploy("tdtime", "div04", "img04");' onmouseover='zoom("img04", 1)' onmouseleave='zoom("img04", 0)' />
						<img id="img03" class="imgtime" tabindex="-1" src="img/ub.jpg" onclick='deploy("tdtime", "div03", "img03");' onmouseover='zoom("img03", 1)' onmouseleave='zoom("img03", 0)' />
						<img id="img02" class="imgtime" tabindex="-1" src="img/iut.jpg" onclick='deploy("tdtime", "div02", "img02");' onmouseover='zoom("img02", 1)' onmouseleave='zoom("img02", 0)' />
						<img id="img01" class="imgtime" tabindex="-1" src="img/lhf.png" onclick='deploy("tdtime", "div01", "img01");' onmouseover='zoom("img01", 1)' onmouseleave='zoom("img01", 0)' />
					</td>
					<td id="tdtime" style="background-color: white; vertical-align: top;">
						<div id="div01" class="timediv">
							<h4>2008-2009</h4>
							<img src="img/bac.jpg" width="300px" />
							<p>Obtention du <b>Baccalauréat Scientifique</b> au lycée Hippolyte Fontaine à Dijon.
							J'y ai choisi de suivre le cursus avec l'option SVT, spécialisation Mathématiques, et un module facultatif d'Art.
							J'ai aussi étudié le grec ancien et le latin.</p>
						</div>
						<div id="div02" class="timediv">
							<div style="display:bloc; height:calc(100% - 330px);">
							<h4>2009-2011</h4>
							<p>Obtention du <b>Diplôme Universitaire Technologique (DUT) en informatique</b> à l'IUT de Dijon.
							Le cursus principal initie brièvement aux bases dont l'intéraction matériel-logiciel, le binaire, le C et le Shell.
							La globalité des cours portent ensuite sur l'algorithmique, l'embarqué, la programmation objet orienté (POO), les bases de données et les diagrammes.
							En plus de l'informatique, la formation offre une diversité de modules, nous interessant aussi bien au droit et à l'économie 
							qu'à la communication, au management, à l'anglais ou aux mathématiques.</p>
							<p>Nous avons réalisé des projets seuls: <i>un Kalaha (jeu de plateau africain) Player.vs.Computer en java</i>, ou en groupe: <i>un moteur 2D de jeux en C#</i>.
							Le cursus se concluant par un stage de 11 semaines que j'ai effectué au service informatique du Conseil Régionnal de Bourgogne,
							afin de reprendre le développement d'un programme existant sur l'intranet pour la gestion de projets et de soummettre un cahier des charges visant à remplacer cet outil.</p>
							<ul>
								<li>Programmation Objet Orienté.</li>
								<li>Analyse, suivi et developpement d'un projet.</li>
								<li>Travail en groupe.</li>
							</ul>
							<p>J'ai aussi grandement pris part à la vie associative de l'iut en rejoignant l'ETIQ (ETudiant InformatiQue) :
							<ul>
								<li>Organisation du local et des activités proposées.</li>
								<li>Organisation d'évènements (intégrations, soirées étudiantes, fêtes de fin d'année).</li>
								<li>Organisation du festival .dijon//SAITEN.</li>
							</ul>
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div02", -1);' onmouseleave='slide("div02", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div02", 1);' onmouseleave='slide("div02", 0);'><p><b>></b></p></div>
								<div><img src="img/iut4.jpg" /><img src="img/iut1.jpg" /><img src="img/iut3.jpg" /><img src="img/iut5.png" /><img src="img/iut6.png" /><img src="img/iut2.jpg" /></div>
							</div>
						</div>
						<div id="div03" class="timediv">
							<div style="display:bloc; height:calc(100% - 330px);">
							<h4>2011-2012</h4>
							<p>Souhaitant améliorer mon niveau d'étude et mes compétences, j'ai rejoins le cursus de la Licence mathématique-informatique à l'Université de Bourgogne.
							Malheureusement, l'éventail et la qualité des cours m'a terriblement déçu: très peu de leçons d'informatique et un niveau trop bas, donc ennuyant.
							Je n'ai donc fait qu'un semestre, mais ai pu cependant réaliser quelques projets interessants
							<ul>
								<li>Simulation d'un robot aspirateur avec interface graphique en java.</li>
								<li>Modélisation en 3D d'un jeu d'échecs en POV-Ray.</li>
							</ul>
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div03", -1);' onmouseleave='slide("div03", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div03", 1);' onmouseleave='slide("div03", 0);'><p><b>></b></p></div>
								<div><img src="img/ub1.png" /><img src="img/ub2.png" /><img src="img/ub3.bmp" /><img src="img/ub4.png" /></div>
							</div>
						</div>
						<div id="div04" class="timediv">
							<div style="display:bloc; height:calc(100% - 330px);"><h4>2012-2013</h4>
							<p>La personne avec qui j'ai travaillé sur le projet du moteur de jeux 2D m'a proposé de l'utiliser pour développer un jeu de rythme.
							Nous avons lancé une campagne de financement participatif sur Ulule afin de nous aider à monter une entreprise sur Dijon. La société Webcitrus
							démarre ainsi son activité en février 2013:
							<ul>
								<li>Dépannage et cours d'informatique à domicile (déplacements en vélo).</li>
								<li>Développement logiciel pour professionnels.</li>
								<li>Vente/conseils de matériel et montage d'ordinateurs.</li>
								<li>Création du jeu vidéo 8bit the musical (renommé ensuite Old School Musical).</li>
							</ul>
							J'assure la majorité des dépannages, développant ainsi mon relationnel avec les clients et travaillant sur le jeu au bureau entre deux trajets. L'entreprise tiens financièrement mais n'arrive pas à gagner davantage de clientèle.
							Un choix très certainement immature de notre part d'avoir voulu nous charger de la communication et de la promotion au lieu d'embaucher quelqu'un dont c'est le métier.
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div04", -1);' onmouseleave='slide("div04", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div04", 1);' onmouseleave='slide("div04", 0);'><p><b>></b></p></div>
								<div><img src="img/wc1.jpg" /><img src="img/wc2.jpg" /><img src="img/osm1.jpg" /><img src="img/wc3.png" /></div>
							</div>
						</div>
						<div id="div05" class="timediv">
							<div style="display:bloc; height:calc(100% - 330px);">
							<h4>2014-2015</h4>
							<p>Notre entreprise Webcitrus a fermé. Je me lance dans le graphisme de jeux-vidéos 2D (pixel-art), confectionne des mock'up,
							 continue de travailler sur le projet Old School Musical. Je me met durement à la musique, perfectionne la pratique de mes instruments 
							 pour finalement découvrir et adopter la MOA (Musique Assistée par Ordinateur) afin de composer.
							<ul>
								<li>Notions graphiques : calques, sprites, tilesets, palettes, animations.</li>
								<li>Notions en MAO : sampler, VST (Virtual Studio Technology), fréquences et modulations.</li>
								<li>Logiciels : Renoise, FL Studio, Audacity, GraphicsGale.</li>
							</ul>
							J'ai ensuite quitté l'équipe d'Old School Musical.
							Quelques extraits de mon travail<br />
							<br /><audio controls="controls">
								<source src="music/sample1.wav" type="audio/wav" />
								<source src="music/sample1.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							<audio controls="controls">
								<source src="music/sample2.wav" type="audio/wav" />
								<source src="music/sample2.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							<audio controls="controls">
								<source src="music/sample4.wav" type="audio/wav" />
								<source src="music/sample4.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							<audio controls="controls">
								<source src="music/sample5.wav" type="audio/wav" />
								<source src="music/sample5.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							<audio controls="controls">
								<source src="music/sample6.wav" type="audio/wav" />
								<source src="music/sample6.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							<audio controls="controls">
								<source src="music/sample7.wav" type="audio/wav" />
								<source src="music/sample7.mp3" type="audio/mp3" />
								Votre navigateur n'est pas compatible
							</audio>
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div05", -1);' onmouseleave='slide("div05", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div05", 1);' onmouseleave='slide("div05", 0);'><p><b>></b></p></div>
								<div><img src="img/mu1.png" /><img src="img/mu2.png" /><img src="img/mu3.png" /><img src="img/mu4.png" /><img src="img/mu5.png" /></div>
							</div>
						</div>
						<div id="div06" class="timediv">
							<div style="display:bloc; height:calc(100% - 330px);">
							<h4>2015-Aujourd'hui</h4>
							<p>J'ai entendu parler de l'école 42 de Xavier Niel, alors j'ai passé les tests en ligne, puis la piscine (épreuve intensive de 4 semaines),
							pour finalement être accepté en tant qu'étudiant. Je ne saurais vanter ce cursus en étant synthétique, mais c'est de loin le meilleur système éducatif 
							que je connaisse. Il nous apprend à être pédagogue, à bien comprendre tout ce qu'on fait, à travailler en groupe, à être autonome, à persévérer...
							On se doit de développer avec une norme, en sécurisant nos programmes et sans fuites mémoires.
							Ce CV en ligne, que j'ai entièrement réalisé de zéro, est une façon de vous prouver que peu importe la technologie (je n'avais fait que très peu de web et jamais de javascript), je suis 
							capable de comprendre, de m'adapter et de me dépêtrer seul grace à internet.
							Voici une liste de projets signifiants terminés ou entammés depuis mon entrée à l'école :
							<ul>
								<li>Sudoku : algorithme de backtracking pour afficher et résoudre une grille de sudoku.</li>
								<li>Libft : recoder les fonctions de la librairie standard puis y ajouter les miennes afin de l'utiliser dans les autres projets.</li>
								<li>Fillit : algorithme de placement pour emboiter au mieux des pièces de tétris.</li>
								<li>Get_next_line : fonction pour récupérer la prochaine ligne d'un ficher en lecture avec un buffer choisi.</li>
								<li>Ft_printf : recoder la fonction "printf".</li>
								<li>Ft_ls : recoder le programme "ls"</li>
								<li>Ft_select : afficher avec la librairie termcaps une liste d'élements à sélectionner dynamiquement.</li>
								<li>42sh : recoder un shell (interpréteur de commandes)</li>
								<li>(en cours)npuzzle : afficher et résoudre par 3 algorithmes de chemin différents un jeu de taquin de quelque taille.</li>
								<li>(en cours)Easyfansub: site web dynamique facilitant la traduction et la modification en équipe de fichiers SRT.</li>
							</ul>
							Beaucoup de conférences en rapport avec notre secteur nous sont proposées dans l'amphithéatre. J'ai évidemment rejoins le groupe de musique 
							de l'école afin de proposer des concerts et participe aux activités d'autres associations.
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div06", -1);' onmouseleave='slide("div06", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div06", 1);' onmouseleave='slide("div06", 0);'><p><b>></b></p></div>
								<div><img src="img/421.jpg" /><img src="img/422.png" /><img src="img/423.png" /></div>
							</div>
						</div>
					</td>
				</tr></table>
			</div>
			<div id="interest" class="box">
				<h5>Centres d'int&eacute;r&ecirc;ts</h5>
				<div id="pa1" class="showimg">
					<p>Voyager, faire du Woofing (fermes et associations) ou du Couchsurfing, aller randonner et camper.
					Destinations: Japon, Grèce, Finlande, Caraïbes, Belgique...</p>
				</div>
				<div id="pa2" class="showimg">
					<p>Pratiquer mes instruments (guitare, percussions, piano...), improviser, composer, et écouter
					de la musique (electronica, trip-hop, breakcore, post-rock, ambiant...).</p>
				</div>
				<div id="pa3" class="showimg">
					<p>Regarder des films et des séries, avec un fort attrait pour la science-fiction. Noter chaque oeuvre vue
					sur SensCritique et contribuer aux critiques et aux classements.</p>
				</div>
				<div id="pa4" class="showimg">
					<p>Cuisiner végétalien, partager un bon repas avec des proches, suivre des recettes et en improviser.</p>
				</div>
			</div>
			<div class="box">
				dfsAAAfsff
			</div>
			<div id="langs" class="box" style="align:center; text-align:center; vertical-align:top;">
				<h5>Langues</h5>
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
				<h5>Connaissances</h5>
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
				<h5>Comp&eacute;tences</h5>
				<div><center>
					<canvas style="box-shadow: 2px 0px 10px #000;border-top-left-radius:10px;border-top-right-radius:10px;margin-left:2%; margin-right:2%;" id="comp1" width="400" height="300"></canvas>
					<canvas style="box-shadow: 2px 0px 10px #000;border-top-left-radius:10px;border-top-right-radius:10px;margin-left:2%; margin-right:2%;" id="comp2" width="400" height="300"></canvas>
				</center></div>
			</div>
			<div id="contact" class="box">
				<h5>Contact</h5>
				<div><input value=" @" style="height:35px;width:20px;padding:0;border-top-left-radius:8px;border-bottom-left-radius:8px;" disabled /> 
				<script>document.write('<input type="email" '/*nobot*/+'value="bay'+'et.t'+'homas@'+/*nobot*/'gmail.com" readonly="readonly" style="height:35px;width:160px;padding:0;text-align:center;border-top-right-radius:8px;border-bottom-right-radius:8px;" />');</script></div>
				<br /><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12475.671361035467!2d2.292143048937684!3d48.902305214780554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f7d03e984ab%3A0xce1d395e61609e94!2sGare+d&#39;Asnieres!5e0!3m2!1sfr!2sfr!4v1480010074851"
				width="100%" height="400px" frameborder="0" style="border:0; margin:0; border-radius: 5px;" allowfullscreen></iframe>
			</div>
			<footer>
				site réalisé from scratch | cv-tbayet.fr 2017
			</footer>
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
		var useMe = new Object();
		var content = document.getElementById("content");
		var navbar = document.getElementById("navbar");
		var navbardiv = document.getElementById("navbardiv");
		var banner = document.getElementById("banner");
		var profil = document.getElementById("profil");
		var videofond = document.getElementById("videofond");
		var sites = document.getElementById("sites");

		refreshnav();
		simplebar("bar", 25);
		simplebar("bar2", 70);
		simplebar("bar3", 60);
		simplebar("bar4", 90);
		simplebar("bar5", 99);

		comp("comp1", 1, "Rigoureux,Méthodique,Polyvalent,Structuré,Cohérent,Astucieux,Coopératif,Autodidacte,Observateur,Médiateur");
		comp("comp2", 2, "Entousiaste,Consciliant,Raisonné,Progressiste,Positif,Intègre,Créatif,Respectueux,Solidaire,Idéaliste");

		drawcircle("ring", 85, "C");
		drawcircle("ring2", 65, "unix");
		drawcircle("ring3", 90, "html");
		drawcircle("ring4", 55, "css");
		drawcircle("ring5", 75, "js");
		drawcircle("ring6", 30, "php");
		drawcircle("ring7", 20, "java");
		drawcircle("ring8", 30, "c++");
		drawcircle("ring9", 15, "c#");
		
		function slide(parent, sens)
		{
			var elem = document.getElementById(parent).lastElementChild;
			if (sens == 0)
				clearInterval(useMe[elem]);
			else
			{
				useMe[elem] = setInterval(scrollit, 1);

				function scrollit()
				{
					elem.scrollLeft += (sens * 2);
				}
			}
		}
		function deploy(div, divchild, img)
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
			child.style.display = "inline-table";
			child.style.height = "100%";
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
				sites.style.maxWidth = "160px";
				banner.style.top = "17vh";
				banner.style.height = "83vh";
				banner.style.width = "100%";
			}
			else
			{
				profil.style.height= "100vh";
				profil.style.width= "20vw";
				profil.style.textAlign = "center";
				sites.style.maxWidth = "400px";
				banner.style.top = "0";
				banner.style.height = "100vh";
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
