let x = 0;

$(document).ready(function() {
  $("input").hover(function() {
    if (x % 2 == 0) {
      $(this).css("border", "1px solid yellow");
      x++;
    } else if (x % 2 == 1) {
      $(this).css("border", "1px solid black");
      x++;
    }
  })
})
