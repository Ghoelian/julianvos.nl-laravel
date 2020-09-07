let zin = "Applicatie ontwikkelaar";

document.getElementById("a").innerHTML = "A. " + zin.length;
document.getElementById("b").innerHTML = "B. " + zin.indexOf("ontwikkelaar");
if(zin.indexOf != -1) {
  document.getElementById("c").innerHTML = "C. Het woord 'wikkelaar' komt voor in de zin.";
} else {
  document.getElementById("c").innerHTML = "C. Het woord 'wikkelaar' komt niet voor in de zin.";
}

document.getElementById("d").innerHTML = "D. " + zin.substr(14, 3);

document.getElementById("e").innerHTML = "E. " + zin.replace("ontwikkelaar", "programmeur");

document.getElementById("f").innerHTML = "F. " + zin.toUpperCase();
