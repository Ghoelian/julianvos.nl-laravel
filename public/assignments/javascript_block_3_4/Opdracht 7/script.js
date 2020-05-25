let i = 0;

function show() {
	i++;

	if(i%2==1){
		document.getElementById("details").innerHTML = "Geboortedatum: 25-12-2000<br> Woonplaats: Klazienaveen";
		document.getElementById("button").innerHTML = "Verberg details";
	} else if(i%2==0) {
		document.getElementById("details").innerHTML = "";
		document.getElementById("button").innerHTML = "Geef details weer";
	}
}