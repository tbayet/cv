function simplebar(idcanvas, percent)
{
	var canvas = document.getElementById(idcanvas);
	var context = canvas.getContext("2d");
	var inter;
	var i = 1;
	var	dir = 1;

	percent *= 2;
	//background
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "#444";
	context.rect(0, 0, 200, 15);
	context.closePath();
	context.fill();

	//borderlines
	context.beginPath();
	context.lineWidth = 1;
	context.strokeStyle = "black";
	context.rect(0, 0, 300, 15);
	context.stroke();

	inter = setInterval(animate, 5);
	function animate()
	{
		//percentfill
		context.beginPath();
		context.lineWidth = 1;
		context.fillStyle = "orange";
		context.rect(1, 1, percent, 13);
		context.closePath();
		context.fill();
		if (i <= 1)
			dir = 1;
		else if (i + 5 >= percent)
			dir = 0;
		//light
		context.beginPath();
		context.lineWidth = 1;
		context.fillStyle = "yellow";
		context.rect(i, 1, 5, 13);
		context.closePath();
		context.fill();
		if (dir == 1)
			i++;
		else
			i--;
	}
}

function getRandomShade(colorcode)
{
	var random;
	var argb;

	function hextoRgb(hexc)
	{
		var p = parseInt(hexc, 16);
		var res = [((p >> 16) & 255), ((p >> 8) & 255), (p & 255)];
		return (res);
	}

	function rgbtoHex(rgb)
	{
		return ("#" + ((1 << 24) + (rgb[0] << 16) + (rgb[1] << 8) + rgb[2]).toString(16).slice(1));
	}

	argb = hextoRgb(colorcode.slice(1));
	for (var i = 0; i < 3; i++)
	{
		random = Math.round(Math.random() * 20 + 1);
		random = (Math.round(Math.random())) ? -random: random;
		argb[i] += random;
		if (argb[i] < 0)
			argb[i] = -random;
		if (argb[i] > 255)
			argb[i] = 255 - random;
	}
	return (rgbtoHex(argb));
}

function drawrect(idcanvas, percent, wordt)
{
	var canvas = document.getElementById(idcanvas);
	var context = canvas.getContext("2d");
	var inter;
	var color = "#A45324";

	inter = setInterval(animate, 150);
	if (percent > 33)
		color = "#9CAF51";
	if (percent > 66)
		color = "#1C9080";
	percent *= 3;

	function animate()
	{
		var j;

		//background
		context.beginPath();
		context.lineWidth = 1;
		context.fillStyle = color;
		context.rect(0, 0, percent, 60);
		context.closePath();
		context.fill();
		for (var i = 0; i < 300; i += 15)
		{
			for (var k = 0; k < 3; k++)
			{
				j = Math.floor(Math.random() * 4);
				context.beginPath();
				context.lineWidth = 1;
				context.fillStyle = getRandomShade(color);
				context.rect(i, j * 15, 15, 15);
				context.closePath();
				context.fill();
			}
		}	
		//rest background
		context.beginPath();
		context.lineWidth = 1;
		context.fillStyle = "#444";
		context.rect(percent, 0, 300 - percent, 60);
		context.closePath();
		context.fill();
		//rest shadows
		context.beginPath();
		context.lineWidth = 5;
		context.strokeStyle = "black";
		context.rect(percent + 3, 3, 300 - (percent + 3), 57);
		context.stroke();
		//borderlines
		context.beginPath();
		context.lineWidth = 2;
		context.strokeStyle = "black";
		context.rect(0, 0, 300, 60);
		context.stroke();
		//text adding
		context.fillStyle = "white";
		context.font = "30px Georgia";
		context.textBaseline = "bottom";
		context.textAlign = "left";
		context.fillText(wordt, 3, 57);
	}
}

function drawcircle(idcanvas, percent, wordt)
{
	var canvas = document.getElementById(idcanvas);
	var context = canvas.getContext("2d");
	var cpt = 0;
	var inter;
	var textsize = (36 - (wordt.length * 3));

	//circle filled in the center
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "#444";
	context.arc(50, 50, 50, 0, Math.PI * 2);
	context.closePath();
	context.fill();
	//text adding
	context.fillStyle = "white";
	context.font = textsize + "px Georgia";
	context.textBaseline = "middle";
	context.textAlign = "center";
	context.fillText(wordt, 51, 49);
	//%percent of the rest;
/*	context.beginPath();
	context.lineWidth = 10;
	context.strokeStyle = "#691107";
	context.arc(50, 50, 44, 0, Math.PI * 2);
	context.stroke();
	context.beginPath();
	context.lineWidth = 4;
	context.strokeStyle = "#600D06";
	context.arc(50, 50, 44, 0, Math.PI * 2);
	context.stroke();*/
	
	inter = setInterval(letsdraw, 50, context, cpt);
	function letsdraw()
	{
		var	piB = 0;
		var	piA = 0;
		
		if (cpt > percent)
			clearInterval(inter);
		if (cpt > 0)
		{
			if (cpt < 25)
			{
				piA = 1.5;
				piB = cpt * 0.02 + 1.5;
			}
			else if (cpt < 100)
			{
				piA = 1.5;
				piB = (cpt - 25) * 0.02;
			}
			else
			{
				piA = 2;
				piB = 0;
			}
		}
		//circle filled in the center
		context.beginPath();
		context.lineWidth = 4;
		context.strokeStyle = "#555";
		context.arc(50, 50, 36, Math.PI * piA, Math.PI * piB);
		context.stroke();
		//%percent of the value;
		context.beginPath();
		context.lineWidth = 10;
		context.strokeStyle = "orange";
		context.arc(50, 50, 45, Math.PI * piA, Math.PI * piB);
		context.stroke();
		context.beginPath();
		context.lineWidth = 2;
		context.strokeStyle = "#FF561A";
		context.arc(50, 50, 47, Math.PI * piA, Math.PI * piB);
		context.stroke();
		//extern circle
		context.beginPath();
		context.lineWidth = 2;
		context.strokeStyle = "#444";
		context.arc(50, 50, 49, Math.PI * piA, Math.PI * piB);
		context.stroke();
		cpt++;
	}
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
simplebar("bar2", 65);
simplebar("bar3", 60);
simplebar("bar4", 80);
simplebar("bar5", 99);

comp("comp1", 1, "Rigoureux,Méthodique,Polyvalent,Structuré,Cohérent,Astucieux,Coopératif,Autodidacte,Observateur,Médiateur");
comp("comp2", 2, "Entousiaste,Consciliant,Raisonné,Progressiste,Positif,Intègre,Créatif,Respectueux,Solidaire,Idéaliste");

drawcircle("ring", 95, "C");
drawcircle("ring2", 40, "shell");
drawcircle("ring3", 15, "java");
drawcircle("ring4", 20, "c++");
drawcircle("ring5", 15, "c#");
drawcircle("ring6", 90, "html");
drawcircle("ring7", 70, "css");
drawcircle("ring8", 65, "js")
drawcircle("ring9", 50, "php");
drawcircle("ring10", 30, "sql");

function slide(parent, sens)
{
    var elem = document.getElementById(parent).lastElementChild;
    function scrollit()
    {
        elem.scrollLeft += (sens * 2);
    }
    if (sens == 0)
        clearInterval(useMe[elem]);
    else
    {
        useMe[elem] = setInterval(scrollit, 1);
    }
}
function deploy(div, divchild, imag, tdimg)
{
    var child = document.getElementById(divchild);
    var parent = document.getElementById(div);
    var parentimg = document.getElementById(tdimg);
    var img = document.getElementById(imag);
    var children = parent.children;
    var childrenimg = parentimg.children;
    var i = 0;
    while (i < children.length)
    {

        childrenimg[i].className = "imgtime";
        children[i].className = "timediv";
        i++;
    }
    img.className += " selected";
    child.className += " opaque";
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
function paddit(elem, is)
{
    if (is == 1)
        elem.src = "img/avatar.jpg";
    else
        elem.src = "img/self.jpg";
}
