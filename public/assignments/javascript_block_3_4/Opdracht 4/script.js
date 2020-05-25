function bold(event, x) {
	if(event.shiftKey) {
		document.getElementById(x).innerHTML = "Hello world!";
	} else {
		document.getElementById(x).innerHTML = "<b>Hello world!</b>";
	}
}