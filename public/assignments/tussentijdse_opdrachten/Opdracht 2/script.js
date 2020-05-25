$(document).ready(function () {
	let currentCell = 1;
	$("#t" + currentCell).css("background-color", "black");

	$(document).keypress(function (e) {
		if (e.which == 119) {
			if (currentCell != 1 && currentCell != 2 && currentCell != 3 && currentCell != 4 && currentCell != 5 && currentCell != 6 && currentCell != 7 && currentCell != 8 && currentCell != 9 && currentCell != 10) {
				$("#t" + currentCell).css("background-color", "white");
				currentCell -= 10;
				$("#t" + currentCell).css("background-color", "black");
			}
		} else if (e.which == 97) {
			if (currentCell != 1 && currentCell != 11 && currentCell != 21 && currentCell != 31 && currentCell != 41 && currentCell != 51 && currentCell != 61 && currentCell != 71 && currentCell != 81 && currentCell != 91) {
				$("#t" + currentCell).css("background-color", "white");
				currentCell--;
				$("#t" + currentCell).css("background-color", "black");
			}
		} else if (e.which == 115) {
			if (currentCell != 91 && currentCell != 92 && currentCell != 93 && currentCell != 94 && currentCell != 95 && currentCell != 96 && currentCell != 97 && currentCell != 98 && currentCell != 99 && currentCell != 100) {
				$("#t" + currentCell).css("background-color", "white");
				currentCell += 10;
				$("#t" + currentCell).css("background-color", "black");
			}
		} else if (e.which == 100) {
			if (currentCell != 10 && currentCell != 20 && currentCell != 30 && currentCell != 40 && currentCell != 50 && currentCell != 60 && currentCell != 70 && currentCell != 80 && currentCell != 90 && currentCell != 100) {
				$("#t" + currentCell).css("background-color", "white");
				currentCell++;
				$("#t" + currentCell).css("background-color", "black");
			}
		}
	});
});


/*
W = 119
A = 97
S = 115
D = 100
*/