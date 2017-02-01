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
	<video id="videofond" style="padding: 0; margin: 0; position:fixed; left:0; top:0; min-width:100%; z-index: -1" autoplay="" loop="" muted="">
		<source src="film.mp4" type="video/mp4" />
	</video>
    <span>Développeur informatique</span>
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
		<img id="avatar" onmouseover="paddit(this, 1)" onmouseout="paddit(this, 0)" src="img/self.jpg" title="Photo de profil" alt="Photo de profil">
		<div style="display:inline-block; vertical-align:top;">
			<h2>Thomas Bayet</h2>
			<h3><?php echo((date("Y") - 1991) - ((date("m") - 7 > 0) ? 0 : 1)); ?> Ans</h3>
		</div>
		<div id="sites">
			<a alt="linkedin" title="linkedin" href="http://www.linkedin.com/in/tbayet" target="_blank"><img width="90%" src="img/linked.png" /></a>
			<a alt="github" title="github" href="https://github.com/tbayet" target="_blank"><img width="90%" src="img/github.png" /></a>
		</div>
	</div>
	
	<div id="banner" onscroll="refreshnav()">
		<div id="content">
			<div id="navbardiv"></div>
			<div id="timeline" class="box">
				<table cellspacing="0" cellpadding="0" style="width:100%; border:none;"><tr style="border: none;">
					<td id="tdimg" style="width:10%;">
						<img id="img06" class="imgtime selected" src="img/42.jpg" onclick='deploy("tdtime", "div06", "img06", "tdimg");' />
						<img id="img05" class="imgtime" src="img/guitar.jpg" onclick='deploy("tdtime", "div05", "img05", "tdimg");' />
						<img id="img04" class="imgtime" src="img/webcitrus.jpeg" onclick='deploy("tdtime", "div04", "img04", "tdimg");' />
						<img id="img03" class="imgtime" src="img/ub.jpg" onclick='deploy("tdtime", "div03", "img03", "tdimg");' />
						<img id="img02" class="imgtime" src="img/iut.jpg" onclick='deploy("tdtime", "div02", "img02", "tdimg");' />
					</td>
					<td id="tdtime" style="background-color: white; vertical-align: top;">
						<div id="div02" class="timediv">
							<div style="height:calc(100% - 330px);">
							<h4>2009-2011</h4>
							<p>Obtention du <b>Diplôme Universitaire Technologique (DUT) en informatique</b> à l'IUT de Dijon.<br />
							La moitié des cours portent sur l'informatique et l'autre sur divers modules plus généraux (anglais, management, économie-droit, expression, etc...)
							<ul>
                                <li>Algorithmique</li>
                                <li>Programmation Objet Orienté</li>
                                <li>Bases de données et diagrammes</li>
                                <li>Electronique et embarqué</li>
								<li>Analyse, suivi et developpement d'un projet</li>
								<li>Travail en groupe</li>
                                </ul></p>
                                <p>Réalisation de deux projets annuels: <i>un Kalaha (jeu de plateau africain) Player.vs.IA en java</i> en solo, et <i>un moteur 2D de jeux en C#</i> en groupe.</p>
                                <p><b>Stage de 11 semaines</b> au service informatique du Conseil Régionnal de Bourgogne: <br />
                                    <i>Maintenance sur un module PHP de l'intranet existant pour la gestion de projets, analyse et développement d'un cahier des charges pour remplacer le module.</i></p>
                            <p>J'ai aussi pris part à la vie associative de l'iut en rejoignant l'ETIQ (ETudiant InformatiQue) :
							<ul>
								<li>Organisation du local et des activités proposées.</li>
								<li>Organisation d'évènements (intégrations, soirées étudiantes, stands, fêtes de fin d'année).</li>
								<li>Organisation et sécurité du festival .dijon//SAITEN.</li>
							</ul>
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div02", -1);' onmouseleave='slide("div02", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div02", 1);' onmouseleave='slide("div02", 0);'><p><b>></b></p></div>
								<div><img src="img/iut4.jpg" /><img src="img/iut1.jpg" /><img src="img/iut3.jpg" /><img src="img/iut5.png" /><img src="img/iut6.png" /><img src="img/iut2.jpg" /></div>
							</div>
						</div>
						<div id="div03" class="timediv">
							<div style="height:calc(100% - 330px);">
							<h4>2011-2012</h4>
                                <p>Cursus de la <b>Licence mathématiques-informatique</b> à l'Université de Bourgogne.<br/>
							L'éventail et la qualité des cours personnellement décevante: trop peu d'informatique et à un niveau trop bas, trop de théorie.<br />
							Je ne me suis donc investi qu'un semestre, mais ai pu cependant réaliser quelques projets interessants au cours de l'année
							<ul>
								<li>Programmation d'un robot aspirateur (algorithme de contour et de balayage) avec interface graphique en java.</li>
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
							<div style="height:calc(100% - 330px);"><h4>2012-2013</h4>
                                <p><i>La personne avec qui j'ai travaillé sur le projet du moteur de jeux 2D (section IUT) m'a proposé de l'utiliser pour <b>développer un jeu de rythme</b>.</i><br />
                                    Lancement d'une campagne de financement participatif sur <a href="https://fr.ulule.com/8btm/" target="_blank">Ulule.fr</a> afin de nous aider à <b>monter une entreprise</b> sur Dijon. La société Webcitrus
							démarre ainsi son activité en février 2013:
							<ul>
								<li>Dépannage et cours d'informatique à domicile (déplacements en vélo).</li>
								<li>Création du jeu vidéo 8bit the musical (renommé ensuite <a href="https://www.facebook.com/oldschoolmusical" target="_blank">Old School Musical</a> ).</li>
                                <li>Vente/conseils de matériel et montage d'ordinateurs.</li>
                                <li>Développement web et logiciel.</li>
							</ul>
							J'assure la majorité des dépannages, développant ainsi mon relationnel et travaillant sur le jeu au bureau entre deux clients. L'entreprise ne rapporte pas suffisemment, faute de communication, et ferme à la fin de l'année.
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div04", -1);' onmouseleave='slide("div04", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div04", 1);' onmouseleave='slide("div04", 0);'><p><b>></b></p></div>
								<div><img src="img/wc1.jpg" /><img src="img/wc2.jpg" /><img src="img/osm1.jpg" /><img src="img/wc3.png" /></div>
							</div>
						</div>
						<div id="div05" class="timediv">
							<div style="height:calc(100% - 330px);">
							<h4>2014-2015</h4>
                                <p><b>Graphisme de jeux-vidéos 2D</b> (pixel-art), confection de mock'up pour des projets personnels et realisation de commandes.<br />
                                Quitte l'équipe du projet <a href="https://www.facebook.com/oldschoolmusical" target="_blank">Old School Musical</a> (perte de motivation).<br />
                                    Travail régulier de la musique, <b>pratique de la percussion, de la guitare, et autres</b>.
                                    Découverte de la <b>MAO (Musique Assistée par Ordinateur)</b>, des instruments virtuels (via MIDI) et composition.
							<ul>
								<li>Notions graphiques : calques, sprites, tilesets, palettes, animations.</li>
								<li>Notions en MAO : sampler, VST (Virtual Studio Technology), fréquences et modulations.</li>
                                    <li><i>Logiciels : Renoise, FL Studio, Audacity, GraphicsGale.</i></li>
							</ul>
							Quelques extraits de compositions<br />
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
						<div id="div06" class="timediv opaque">
							<div style="height:calc(100% - 330px);">
							<h4>2015-Aujourd'hui</h4>
                                <p>Piscine C en juillet (épreuves sur 4 semaines d'apprentissage) puis entrée à l'<b>Ecole 42</b> en novembre. <br />
                                    <i>Afin de vanter ce <a href="http://www.42.fr/le-programme/" target="_blank">cursus</a> en étant synthétique, je dirais c'est de loin le système éducatif le
							plus adapté que je connaisse. Il nous apprend à être pédagogue, et surtout à bien comprendre tout ce qu'on fait, à travailler en groupe, à être autonome, à persévérer...
                                    On se doit de développer avec une norme, en sécurisant nos programmes et en maîtrisant la mémoire solicitée.</i><br />
                                    Ce <b>CV en ligne</b>, que j'ai entièrement réalisé de zéro, est aussi une façon de montrer mes capacités.<br />
							Sélection de projets terminés ou entammés depuis mon entrée à l'école :
							<ul>
								<li>(en cours)npuzzle : afficher et résoudre en multithreads par 3 algorithmes de chemin différents un jeu de taquin de quelque taille.</li>
								<li>(en cours)untitled: site web dynamique facilitant la traduction et la modification en équipe de fichiers SRT.</li>
                                    <li><b>42sh</b> (groupe) : recoder un shell (interpréteur de commandes)</li>
								<li>Ft_select : afficher avec la librairie termcaps une liste d'élements à sélectionner dynamiquement.</li>
								<li>Ft_ls : recoder le programme "ls"</li>
                                    <li><b>Piscine (C - PHP)</b> : apprentissage intensif sur plusieurs semaines d'une nouvelle technologie.</li>
								<li>Sudoku : algorithme de backtracking pour afficher et résoudre une grille de sudoku.</li>
                                    <li><b>Libft</b> : recoder les fonctions de la librairie standard puis y ajouter les miennes afin de l'utiliser dans les autres projets.</li>
								<li>Fillit : algorithme de placement pour emboiter au mieux des pièces de tétris.</li>
							</ul>
							Participation au Club Music42 de l'école afin de jouer ensembles et proposer des concerts lors de nos évènements.
							</p></div>
							<div class="diapo">
								<div class="butleft" onmouseenter='slide("div06", -1);' onmouseleave='slide("div06", 0);'><p><b><</b></p></div>
								<div class="butright" onmouseenter='slide("div06", 1);' onmouseleave='slide("div06", 0);'><p><b>></b></p></div>
								<div><img src="img/421.jpg" /><img src="img/422.png" /><img src="img/423.png" /><img src="img/tree.png" /></div>
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
					<p>Regarder des films et des séries, avec une préférence pour la science-fiction. Répertorier chaque oeuvre vue
					sur SensCritique et contribuer aux critiques et aux classements.</p>
				</div>
				<div id="pa4" class="showimg">
					<p>Cuisiner en improvisant, plutôt salé, et partager un bon repas avec des proches.</p>
				</div>
				<div id="pa5" class="showimg">
					<p>Jouer à des jeux independants et courts, et quelques jeux en ligne. En depassant les prejuges, on se rend compte d'une immense richesse artistique, mais pas seulement.</p>
				</div>
			</div>
			<div id="langs" class="box" style="text-align:center; text-align:center; vertical-align:top;">
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
				<canvas title="C 95/100" id="ring" width="100" height="100" onclick='drawcircle("ring", 95, "C");'></canvas>
				<canvas title="Shell script 40/100" id="ring2" width="100" height="100" onclick='drawcircle("ring2", 40, "shell");'></canvas>
				<canvas title="Java 15/100" id="ring3" width="100" height="100" onclick='drawcircle("ring3", 15, "java");'></canvas>
				<canvas title="C++ 20/100" id="ring4" width="100" height="100" onclick='drawcircle("ring4", 20, "c++");'></canvas>
				<canvas title="C# 15/100" id="ring5" width="100" height="100" onclick='drawcircle("ring5", 15, "c#");'></canvas>
				<canvas title="HTML 90/100" id="ring6" width="100" height="100" onclick='drawcircle("ring6", 90, "html");'></canvas>
				<canvas title="CSS 70/100" id="ring7" width="100" height="100" onclick='drawcircle("ring7", 70, "css");'></canvas>
				<canvas title="Javascript 65/100" id="ring8" width="100" height="100" onclick='drawcircle("ring8", 65, "js")'></canvas>
				<canvas title="PHP 50/100" id="ring9" width="100" height="100" onclick='drawcircle("ring9", 50, "php");'></canvas>
                <canvas title="MySQL 30/100" id="ring10" width="100" height="100" onclick='drawcircle("ring10", 30, "sql");'></canvas>
			</div>
			<div id="skills" class="box">
				<h5>Compétences</h5>
				<div><center>
					<canvas title="Rigoureux, Méthodique, Polyvalent, Structuré, Cohérent, &#13;Astucieux, Coopératif, Autodidacte, Observateur, Médiateur" style="box-shadow: 2px 0px 10px #000;border-top-left-radius:10px;border-top-right-radius:10px;margin-left:2%; margin-right:2%;" id="comp1" width="400" height="300"></canvas>
					<canvas title="Entousiaste, Consciliant, Raisonné, Progressiste, Positif, &#13;Intègre, Créatif, Respectueux, Solidaire, Idéaliste" style="box-shadow: 2px 0px 10px #000;border-top-left-radius:10px;border-top-right-radius:10px;margin-left:2%; margin-right:2%;" id="comp2" width="400" height="300"></canvas>
				</center></div>
			</div>
			<div id="contact" class="box">
				<h5>Contact</h5>
				<div>
				<a id="download" href="cv.pdf" download="CV_Thomas_Bayet">Télécharger un résumé en .PDF</a><br /><br /><br />
				<input value=" @" style="height:35px;width:20px;padding:0;border-top-left-radius:8px;border-bottom-left-radius:8px;" disabled /> 
				<script>document.write('<input type="email" '/*nobot*/+'value="bay'+'et.t'+'homas@'+/*nobot*/'gmail.com" readonly="readonly" style="height:35px;width:160px;padding:0;text-align:center;border-top-right-radius:8px;border-bottom-right-radius:8px;" />');</script></div>
				<br /><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12475.671361035467!2d2.292143048937684!3d48.902305214780554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f7d03e984ab%3A0xce1d395e61609e94!2sGare+d&#39;Asnieres!5e0!3m2!1sfr!2sfr!4v1480010074851"
				width="100%" height="400px" frameborder="0" style="border:0; margin:0; border-radius: 5px;" allowfullscreen></iframe>
			</div>
			<footer>
				site réalisé from scratch | tbayet.esy.es 2017
			</footer>
		</div>
	</div>
	<script src="tools.js"></script>
    <script src="comp.js"></script>
</BODY>
</HTML>
