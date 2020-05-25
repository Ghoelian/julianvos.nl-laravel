$(document).ready(function() {
  setInterval(function() {
    for (i = 0; i < 13; i++) {
      $("#img" + i).animate({
        left: "-200px"
      }, 10000);

      let x = parseInt($("#img" + (i + 1)).css("left"));

      if (x <= -200) {
        $("#img" + i).css("left", "2750px");
      }
    }
  }, 100);
});
