function showCoords(event) {
	let x = event.clientX;
	let y = event.clientY;
	let coor = "X: " + x + ", Y: " + y;

	document.getElementById("ding").innerHTML = coor;
}