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
