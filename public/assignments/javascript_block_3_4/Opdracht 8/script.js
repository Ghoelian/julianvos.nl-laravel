function prompt() {
	document.getElementById("prompt").innerHTML = "Naam:<input id='input' type='text'><button onclick='change()' id='button'>Klik</button>"
}

function change() {
	let name = document.getElementById("input").value;
	let ding = document.getElementById("body").innerHTML;
	document.getElementById("body").innerHTML = ding + "<div onclick='prompt()'>" + name + "</div>";
	document.getElementById("prompt").innerHTML = "";
}