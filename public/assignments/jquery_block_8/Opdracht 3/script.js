let leftNum;
let topNum;

$(document).ready(function() {
  $("img").mouseenter(function() {
    $(this).css("width", "150");
    $(this).css("height", "150");
    $(this).css("z-index", "999");
  });

  $("img").mouseleave(function() {
    $(this).css("width", "100");
    $(this).css("height", "100");
    $(this).css("z-index", "0");
  });

  $("img").click(function() {
    leftNum = Math.floor(Math.random() * 9000);
    topNum = Math.floor(Math.random() * 9000);

    $(this).animate({
      left: leftNum,
      top: topNum
    }, "slow");
  });
});
