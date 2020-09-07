let array = [];
let newText;

$(document).ready(function() {
  $("button").mousedown(function() {
    newText = document.getElementById("text").value;

    array[0] = $("#r1").html();
    array[1] = $("#r2").html();
    array[2] = $("#r3").html();
    array[3] = $("#r4").html();
    array[4] = $("#r5").html();

    function fadeOut() {
      $("#r1").fadeTo("slow", 0);
    }

    function fadeIn() {
      $("#r1").fadeTo(1, 1);
      $("#r5").fadeTo(1, 0);
      $("#r1").html(array[1]);
      $("#r2").html(array[2]);
      $("#r3").html(array[3]);
      $("#r4").html(array[4]);
      $("#r5").html(newText);
      $("#r5").fadeTo("slow", 1);
    }

    fadeOut();
    setTimeout(fadeIn, 600);
  });
});
