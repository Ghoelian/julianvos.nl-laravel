$(document).ready(function(){
	$("#hide").click(function(){
		$("li").hide();
	});

	$("#show").click(function(){
		$("li").show();
	});

	$("#test").click(function(){
		$(".test").hide();
	});

	$("#blue").click(function(){
		$("li").css("color", "blue");
	});

	$("#black").click(function(){
		$("li").css("color", "black");
	});
});