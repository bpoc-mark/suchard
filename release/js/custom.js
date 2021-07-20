"use strict";

$(document).ready(function () {
  $('.btn_read_more').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).children('p').text('CLOSE');
      $(this).children('img').css({
        "transform": "rotate(-90deg)",
        "transition": "all 450ms"
      });
      $(this).next('.col_3').slideDown();
      $(this).removeClass("active");
    } else {
      $(this).children('p').text('READ MORE');
      $(this).children('img').css({
        "transform": "rotate(0deg)",
        "transition": "all 450ms"
      });
      $(this).next('.col_3').slideUp();
      $(this).addClass("active");
    }
  });
});