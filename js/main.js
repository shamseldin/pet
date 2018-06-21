$(function () {
  'use strict';
  //adjust slider height 
  var winH      = $(window).height(),
      upperH    = $('.upper-bar').innerHeight(),
      navH      = $('.navbar').innerHeight();
  $('.slider , .carousel-item').height(winH - (upperH + navH));
    //featured work sghuffle 
    $('.our-pets ul li').on('click' , function() {
        $(this).addClass('active').siblings().removeClass('active');
        if($(this).data('class') === 'all') {
            
            $('.shuffle-imgs .col-md').css('opacity',1);
        } else {
            $('.shuffle-imgs .col-md').css('opacity',0.3);
            $($(this).data('class')).parent().css('opacity',1);
        }
    });
  });