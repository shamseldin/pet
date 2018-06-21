$(function(){
    
   'use strict';
    $('html').niceScroll();
    $('.header').height($(window).height());
     $('.overlay').height($(window).height());


   
      $("#open").click(function(){
         $("input").attr("type","password");
         $(this).hide();
         $("#close").show();
     });
     
     $("#close").click(function(){
         $("input").attr("type","text");
         $(this).hide();
         $("#open").show();
     }); 
   /* $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
}); */
        
 });
     