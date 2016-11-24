function drawrect(idcanvas, percent, wordt)
{
	var canvas = document.getElementById(idcanvas);
	var context = canvas.getContext("2d");
	
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "#1C9080";
	context.rect(0, 0, 300, 60);
	context.closePath();
	context.fill();
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