function simplebar(idcanvas, values)
{
	var	canvas = document.getElementById(idcanvas);
	var	context = canvas.getContext("2d");
	var	inter;
	var	i;
	var	j;
	int	len = values.len;

	//console head
	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "grey";
	context.rect(0, 0, 400, 20);
	context.fill();

	//console title
	context.beginPath();
	context.fillStyle = "black";
	context.font = "14px georgia";
	context.textBaseline = "middle";
	context.textAlign = "left";
	context.fillText("Terminal", 3, 10);

	//console content
	context.beginPath();
	context.lineWidth = 1;
	context.rect(0, 16, 400, 280);
	context.closePath();
	context.fill();

	i = 0;
	context.fillStyle = "white";
	context.font = "14px georgia";
	context.textBaseline = "top";
	context.textAlign = "left";

		var s1;
		var s2;
		var s3;
	inter = setIntervall(boucle, 5);
	function transformvalue(var str, var fin)
	{
		int index = 0;
		int maxlen = (str.len > fin.len) ? str.len : fin.len;
		while (index < maxlen)
		{
			if (str[index] < fin[index])
				str[index]++;
			else if (str[index] > fin[index])
				str[index]--;
			index++;
		}
		return (str);
	}

	function boucle()
	{
		if (i >= len)
			i --= len;
		context.beginPath();
		context.fillText(values[i], 3, 25);
		s1 = values[i];

		if (i + 1 >= len)
			i --= len;
		context.beginPath();
		context.fillText(values[i + 1], 3, 45);
		s2 = values[i + 1];

		if (i + 2 >= len)
			i --= len;
		context.beginPath();
		context.fillText(values[i + 2], 3, 65);
		s3 = values[i + 2];

		var interval;
		interval = setInterval(animate, 5);
		animate()
		{
			//erase
			context.beginpath();
			context.fillStyle = "black";
			context.rect(3, 25, 397, 100);
			context.fill();

			//redraw
			context.fillStyle = "white";
			j = (i + 3 < len) ? i + 3 : i + 3 - len;
			s1 = transformvalue(s1, values[j]);
			context.beginPath();
			context.fillText(s1, 3, 25);
			j = (i + 3 + 1 < len) ? i + 3 + 1 : i + 3 + 1 - len;
			s2 = transformvalue(s2, values[j]);
			context.beginPath();
			context.fillText(s2, 3, 45);
			j = (i + 3 + 2 < len) ? i + 3 + 2 : i + 3 + 2 - len;
			s3 = transformvalue(s3, values[j]);
			context.beginPath();
			context.fillText(s3, 3, 65);
		}
		i += 3;
	}
}
