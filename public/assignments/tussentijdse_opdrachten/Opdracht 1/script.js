let turn = "X";

function add(cell) {
	if(turn=="X" && document.getElementById(cell).innerHTML=="") {
		document.getElementById(cell).innerHTML = "X";
		turn = "O";
	} 
	else if(turn=="O" && document.getElementById(cell).innerHTML=="") {
		document.getElementById(cell).innerHTML = "O";
		turn = "X";
	}

	if(document.getElementById("0").innerHTML=="X" && document.getElementById("1").innerHTML=="X" && document.getElementById("2").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("3").innerHTML=="X" && document.getElementById("4").innerHTML=="X" && document.getElementById("5").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("6").innerHTML=="X" && document.getElementById("7").innerHTML=="X" && document.getElementById("8").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("0").innerHTML=="X" && document.getElementById("3").innerHTML=="X" && document.getElementById("6").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("1").innerHTML=="X" && document.getElementById("4").innerHTML=="X" && document.getElementById("7").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("2").innerHTML=="X" && document.getElementById("5").innerHTML=="X" && document.getElementById("8").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("0").innerHTML=="X" && document.getElementById("4").innerHTML=="X" && document.getElementById("8").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	} if(document.getElementById("2").innerHTML=="X" && document.getElementById("4").innerHTML=="X" && document.getElementById("6").innerHTML=="X") {
		document.getElementById(cell).innerHTML = "X";
		window.alert("X heeft gewonnen!");
		reset();
	}


	if(document.getElementById("0").innerHTML=="O" && document.getElementById("1").innerHTML=="O" && document.getElementById("2").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("3").innerHTML=="O" && document.getElementById("4").innerHTML=="O" && document.getElementById("5").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("6").innerHTML=="O" && document.getElementById("7").innerHTML=="O" && document.getElementById("8").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("0").innerHTML=="O" && document.getElementById("3").innerHTML=="O" && document.getElementById("6").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("1").innerHTML=="O" && document.getElementById("4").innerHTML=="O" && document.getElementById("7").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("2").innerHTML=="O" && document.getElementById("5").innerHTML=="O" && document.getElementById("8").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("0").innerHTML=="O" && document.getElementById("4").innerHTML=="O" && document.getElementById("8").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	} if(document.getElementById("2").innerHTML=="O" && document.getElementById("4").innerHTML=="O" && document.getElementById("6").innerHTML=="O") {
		document.getElementById(cell).innerHTML = "O";
		window.alert("O heeft gewonnen!");
		reset();
	}
}

function reset() {
	for(i=0; i<9; i++) {
		document.getElementById(i).innerHTML = "";
		turn = "X";
	}
}