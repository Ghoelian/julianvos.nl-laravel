let random;
let div;
let teller = 0;

$(document).ready(function() {
  $("#teller").html("Teller: " + teller);

  $("div.click").click(function() {
    let backgroundColor = $(this).css("background-color");

    random = Math.floor(Math.random() * 17);
    div = "div" + random;

    $(this).css("background-color", "blue");
    $("#" + div).css("background-color", "blue");

    if(backgroundColor === "rgb(0, 0, 255)") {
      teller += 1;
      $("#teller").html("Teller: " + teller);
    }
  });

  $("button").click(function() {
    $("div.click").css("background-color", "yellow");
    teller = 0;
    $("#teller").html("Teller: " + 0);
  });
});
