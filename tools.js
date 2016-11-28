function getRandomShade(colorcode)
{
	var random;
	var argb;

	function hexToRgb(hex)
	{
		var p = parseInt(hex, 16);
		var rgb = [(p >> 16) & 255, (p >> 8) & 255, p & 255];
		return (rgb);
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

	percent *= 3;

	//background
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "#1C9080";
	context.rect(0, 0, percent, 60);
	context.closePath();
	context.fill();

	//shadows
	context.beginPath();
	context.lineWidth = 5;
	context.strokeStyle = "#0B614B";
	context.rect(0, 0, percent - 3, 57);
	context.stroke();

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

	animate();

	function animate()
	{
		var j;

		for (var i = 1; i < percent; i += 15)
		{
			j = Math.round(Math.random() * 4);
			context.beginPath();
			context.lineWidth = 1;
			context.fillStyle = getRandomShade("#1C9080");
			if (i + 15 > percent)
				context.rect(i, j * 15 + 1, percent, 60);
			else
				context.rect(i, j * 15 + 1, i + 15, 60);
			context.closePath();
			context.fill();
		}
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
	context.fillStyle = "#1C9080";
	context.arc(50, 50, 34, 0, Math.PI * 2);
	context.closePath();
	context.fill();
	//text adding
	context.fillStyle = "white";
	context.font = textsize + "px Georgia";
	context.textBaseline = "middle";
	context.textAlign = "center";
	context.fillText(wordt, 51, 49);
	//%percent of the rest;
	context.beginPath();
	context.lineWidth = 16;
	context.strokeStyle = "#444";
	context.arc(50, 50, 39, 0, Math.PI * 2);
	context.stroke();
	context.beginPath();
	context.lineWidth = 4;
	context.strokeStyle = "black";
	context.arc(50, 50, 44, 0, Math.PI * 2);
	context.stroke();
	
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
		context.lineWidth = 2;
		context.strokeStyle = "#0B614B";
		context.arc(50, 50, 30, Math.PI * piA, Math.PI * piB);
		context.stroke();	
		//%percent of the value;
		context.beginPath();
		context.lineWidth = 16;
		context.strokeStyle = "orange";
		context.arc(50, 50, 39, Math.PI * piA, Math.PI * piB);
		context.stroke();
		context.beginPath();
		context.lineWidth = 4;
		context.strokeStyle = "red";
		context.arc(50, 50, 33, Math.PI * piA, Math.PI * piB);
		context.stroke();
		//extern circle
		context.beginPath();
		context.lineWidth = 1;
		context.strokeStyle = "yellow";
		context.arc(50, 50, 47, Math.PI * piA, Math.PI * piB);
		context.stroke();
		cpt++;
	}
}
