let x = 0;

$(document).ready(function() {
  $("button").click(function() {
    if ((x % 2) == 0) {
      $("div").css("color", "green");
      x += 1;;
    } else if ((x % 2) == 1) {
      $("div").css("color", "red");
      x += 1;
    }
  });
});
