let x = 0;

$(document).ready(function() {
  for (i = 0; i < 100; i++) {
    $("div").animate({
      left: "-7%"
    }, 5000);
    $("div").animate({
      left: "100%"
    }, 0);
  }
});
