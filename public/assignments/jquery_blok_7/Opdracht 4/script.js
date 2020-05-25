$(document).ready(function() {
  $("div").mouseenter(function() {
    $(this).css("background-color", "blue");
  });
  $("div").mouseleave(function() {
    $(this).css("background-color", "yellow");
  });
});
