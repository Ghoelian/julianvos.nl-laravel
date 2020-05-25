const onClick = (element) => {
	document.getElementById("img01").src = element.src;
	document.getElementById("modal01").style.display = "block";
	let captionText = document.getElementById("caption");
	captionText.innerHTML = element.alt;
  }

  window.onscroll = () => {
	navChange()
  };

const navChange = () => {
	let navbar = document.getElementById("navbar");
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
	  navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-dark-grey";
	} else {
	  navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-dark-grey", "");
	}
  }

const toggle = () => {
	let x = document.getElementById("navDemo");
	if (x.className.indexOf("w3-show") == -1) {
	  x.className += " w3-show";
	} else {
	  x.className = x.className.replace(" w3-show", "");
	}
  }