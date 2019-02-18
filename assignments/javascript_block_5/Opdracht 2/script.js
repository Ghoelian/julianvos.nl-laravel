let str = "122087@student.drenthecollege.nl 0591316677 7891DD Boterbloem 57 Vrouw";

let postcode = str.match(/[0-9]{4}[A-Z]{2}/gi);
let telefoonnummer = str.match(/[0-9]{4}31[0-9]{4}/g);
let email = str.match((/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/gi));
let adres = str.match(/[A-Z][a-z]+\s[0-9]+/g);
let m = str.match(/\bMan\b/g);
let v = str.match(/\bVrouw\b/g);

if(m === null) {
	var gender = "Vrouw";
} else {
	var gender = "Man";
}

document.write(postcode[0], "<br/>", telefoonnummer[0], "<br/>", email[0], "<br/>", adres[0], "<br/>", gender);
