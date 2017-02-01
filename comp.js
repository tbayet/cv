function comp(idcanvas, type, valuesstr)
{
	var	canvas = document.getElementById(idcanvas);
	var	context = canvas.getContext("2d");
	var	i;
	var values = valuesstr.split(',');
	var	len = values.length;

	
	reallocall();
	function reallocall()
	{
		var maxlen = 0;
		var cpt = 0;

		while (cpt < len)
		{
			if (values[cpt].length > maxlen)
				maxlen = values[cpt].length;
			cpt++;
		}
		
		cpt = 0;
		while (cpt < len)
		{
			values[cpt] = realloc(values[cpt], maxlen);
			cpt++;
		}
		
		function realloc(str, dim)
		{
			var c_end = str.length;
			while (c_end < dim)
			{
				str += " ";
				c_end++;
			}
			return (str);
		}
	}
		
	//console head
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "lavender";
	context.rect(0, 0, 400, 40);
	context.fill();
	
	//buttons
	context.strokeStyle = "grey";
	context.lineWidth = 1;
	context.beginPath();
	context.fillStyle = "red";
	context.arc(15, 20, 8, 0, Math.PI * 2);
	context.closePath();
	context.fill();
	context.beginPath();
	context.arc(15, 20, 8, 0, Math.PI * 2);
	context.stroke();
	context.beginPath();
	context.fillStyle = "pink";
	context.arc(16, 23, 4, 0, Math.PI * 2);
	context.closePath();
	context.fill();

	context.beginPath();
	context.fillStyle = "orange";
	context.arc(40, 20, 8, 0, Math.PI * 2);
	context.closePath();
	context.fill();
	context.beginPath();
	context.arc(40, 20, 8, 0, Math.PI * 2);
	context.stroke();
	context.beginPath();
	context.fillStyle = "yellow";
	context.arc(41, 23, 4, 0, Math.PI * 2);
	context.closePath();
	context.fill();

	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "mediumseagreen";
	context.arc(65, 20, 8, 0, Math.PI * 2);
	context.closePath();
	context.fill();
	context.beginPath();
	context.arc(65, 20, 8, 0, Math.PI * 2);
	context.stroke();
	context.beginPath();
	context.fillStyle = "cyan";
	context.arc(66, 23, 4, 0, Math.PI * 2);
	context.closePath();
	context.fill();

	//console title
	context.beginPath();
	context.fillStyle = "black";
	context.font = "24px georgia";
	context.textBaseline = "middle";
	context.textAlign = "left";
	if (type === 1)
		context.fillText("- Professionnelles", 100, 20);
	else
		context.fillText("- Personnelles", 100, 20);

	//console content
	context.beginPath();
	context.lineWidth = 1;
	context.rect(0, 40, 400, 260);
	context.fill();

	i = 0;
	context.fillStyle = "lavender";
	context.font = "20px georgia";
	context.textBaseline = "top";
	context.textAlign = "left";
	
	//console prompt
	context.beginPath();
	if (type === 1)
		context.fillText("$: ~/cv/ressources > cat pro.comp", 8, 50);
	else
		context.fillText("$: ~/cv/ressources > cat perso.comp", 8, 50);
	//console prompt
	context.beginPath();
	context.fillText("$: ~/cv/ressources > _", 8, 170);

	var s1;
	var s2;
	var s3;
	boucle();

	function replaceAt(str, c, x)
	{
		return str.substr(0, x) + c + str.substr(x + 1);
	}
	function transformvalue(str, fin)
	{
		var index = 0;
		var minlen = (str.length < fin.length) ? str.length : fin.length;
		var maxlen = (str.length > fin.length) ? str.length : fin.length;
		while (index < maxlen)
		{
			if (str[index].charCodeAt(0) < fin[index].charCodeAt(0))
				str = replaceAt(str, String.fromCharCode(str[index].charCodeAt(0) + 1), index);
			else if (str[index].charCodeAt(0) > fin[index].charCodeAt(0))
				str = replaceAt(str, String.fromCharCode(str[index].charCodeAt(0) - 1), index);
			index++;
		}
		return (str);
	}

	function boucle()
	{
		if (i >= len)
			i -= len;
		var	ind = [i, i + 1, i + 2];

		if (ind[0] >= len)
			ind[0] -= len;
		context.beginPath();
		s1 = values[ind[0]];
		context.fillText(s1, 8, 80);

		if (ind[1] >= len)
			ind[1] -= len;
		context.beginPath();
		s2 = values[ind[1]];
		context.fillText(s2, 8, 110);
		
		if (ind[2] >= len)
			ind[2] -= len;
		context.beginPath();
		s3 = values[ind[2]];
		context.fillText(s3, 8, 140);

		var nind = [ind[0] + 3, ind[1] + 3, ind[2] + 3];
		if (nind[0] >= len)
			nind[0] -= len;
		if (nind[1] >= len)
			nind[1] -= len;
		if (nind[2] >= len)
			nind[2] -= len;
		
		animate();
		i += 3;
		setTimeout(boucle, 4000);

		function animate()
		{
			//erase
			context.beginPath();
			context.fillStyle = "black";
			context.rect(6, 75, 394, 95);
			context.fill();

			//redraw
			context.fillStyle = "lavender";
			s1 = transformvalue(s1, values[nind[0]]);
			context.beginPath();
			context.fillText(s1, 8, 80);
			s2 = transformvalue(s2, values[nind[1]]);
			context.beginPath();
			context.fillText(s2, 8, 110);
			s3 = transformvalue(s3, values[nind[2]]);
			context.beginPath();
			context.fillText(s3, 8, 140);
			interval = setTimeout(animate, 5);
			if (s1 === values[nind[0]] && s2 === values[nind[1]] && s3 === values[nind[2]])
			{
				clearTimeout(interval);
				return (0);
			}
		}
	}
}
