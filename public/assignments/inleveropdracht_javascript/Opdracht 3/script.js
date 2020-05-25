let namesLeft = [];
let namesRight = [];

function add() {
  let name = document.getElementById("name").value;
  namesLeft.push(name);
  document.getElementById("box1").innerHTML = namesLeft.join("<br>");
  document.getElementById("box2").innerHTML = namesRight.join("<br>");
}

function right() {
  if (namesLeft.length != 0) {
    namesRight.push(namesLeft[namesLeft.length - 1]);
    namesLeft.pop();
    document.getElementById("box1").innerHTML = namesLeft.join("<br>");
    document.getElementById("box2").innerHTML = namesRight.join("<br>");
  }
}

function left() {
  if (namesRight.length != 0) {
    namesLeft.push(namesRight[namesRight.length - 1]);
    namesRight.pop();
    document.getElementById("box1").innerHTML = namesLeft.join("<br>");
    document.getElementById("box2").innerHTML = namesRight.join("<br>");
  }
}
