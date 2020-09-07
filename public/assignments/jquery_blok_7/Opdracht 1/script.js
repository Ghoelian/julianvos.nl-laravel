$(document).ready(function() {
  $("#knop1").click(function() {
    $("#div1").html(this.value);
  });

  $("#knop1").hover(function() {
    let random = "knop" + Math.floor((Math.random() * 3) + 1) + ".value";
    $("#div1").html(random);
  });

  $("#knop2").hover(function() {
    $("#div1").html(this.value);
  });
});
