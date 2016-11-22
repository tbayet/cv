function drawcircle(idcanvas)
{
	var canvas = document.getElementById(idcanvas);
	var context = canvas.getContext("2d");

	context.beginPath();
	context.lineWidth = 1;
	context.fillStyle = "#1C9080";
	context.arc(50, 50, 34, 0, Math.PI * 2);
	context.closePath();
	context.fill();	

	context.beginPath();
	context.lineWidth = 9;
	context.strokeStyle = "orange";
	context.arc(50, 50, 40, 0, Math.PI * 1.5);
	context.stroke();

	context.beginPath();
	context.strokeStyle = "yellow";
	context.arc(50, 50, 40, Math.PI * 1.5, 0);
	context.stroke();

	context.beginPath();
	context.lineWidth = 2;
	context.strokeStyle = "black";
	context.arc(50, 50, 46, 0, Math.PI * 2);
	context.closePath();
	context.stroke();
}