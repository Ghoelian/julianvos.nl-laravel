let i = 0;
let language = "english";

function vertaal() {
  i++;
  if(i%2==1) {
    document.getElementById("text").innerHTML = "<i>Hallo wereld!</i>";
    language = "dutch";
  } else if(i%2==0) {
    document.getElementById("text").innerHTML = "<i>Hello world!</i>";
    language = "english";
  }

}

function italic() {
  if(language == "english") {
    document.getElementById("text").innerHTML = "<i>Hello world!</i>";
  } else if(language == "dutch") {
    document.getElementById("text").innerHTML = "<i>Hallo wereld!</i>";
  }
}

function normal() {
  if(language == "english") {
    document.getElementById("text").innerHTML = "Hello world!";
  } else if(language == "dutch") {
    document.getElementById("text").innerHTML = "Hallo wereld!";
  }
}
