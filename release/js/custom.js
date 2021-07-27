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
  $(".accordion_item > a").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active"); // $(this).children('span').text('CLOSE');

      $(this).siblings(".content").slideDown();
      $(this).find('.open_txt').text('CLOSE');
      $(this).find('.open_img').attr("src", templateUrl + "/release/image/sect_2/close_arrow.png");
      $('.cont_slider').get(0).slick.setPosition();
      $('.cont_slider').get(1).slick.setPosition();
      $('.cont_slider').get(2).slick.setPosition();
    } else {
      $(this).find('.open_txt').text('OPEN');
      $(this).find('.open_img').attr("src", templateUrl + "/release/image/sect_2/open_arrow.png");
      $(".accordion_item > p").removeClass("active");
      $(this).addClass("active");
      $(this).siblings(".content").slideUp();
    }
  });
  $(".cont_slider").slick({
    arrows: false,
    slidesToShow: 2,
    centerMode: true,
    centerPadding: '0',
    infinite: false,
    dots: true,
    responsive: [{
      breakpoint: 750,
      settings: {
        arrows: false,
        slidesToShow: 1.3,
        centerMode: true,
        centerPadding: '0',
        infinite: false,
        dots: true
      }
    } // {
    //     breakpoint: 500,
    //     settings: {
    //         centerPadding: '40px',
    //     }
    // },
    //         {
    //     breakpoint: 371,
    //     settings: {
    //         centerPadding: '30px',
    //     }
    // },  
    ]
  });
});
jQuery(window).resize(function () {
  var width = jQuery(window).width();

  if (width > 750) {
    $('.content').removeAttr('style');
  }
});