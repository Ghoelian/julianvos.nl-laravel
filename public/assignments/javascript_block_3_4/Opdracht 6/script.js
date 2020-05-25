function timer() {
	let ding = document.getElementById("number").value;
	console.log(ding);
	setTimeout(function(){
		alert("Timer voorbij"); }, ding*1000);	
}