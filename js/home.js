$(document).ready(function(){
    
      $("html").niceScroll({
         cursorcolor: '#00a79d'
     });
        
   
     $(' .carousel-caption button').click(function () {
     $('html, body').animate({
        scrollTop: $('.features').offset().top  
     },1000 ); // sor3et nazolo

  });
 
    
    var leftArrow = $('.features .fa-chevron-left'),
      rightArrow = $('.features .fa-chevron-right');
      
    function checkBoxs(){
     $('.box:first').hasClass('active') ?  leftArrow.fadeOut() : leftArrow.fadeIn();
     $('.box:last').hasClass('active') ?  rightArrow.fadeOut() : rightArrow.fadeIn();    
        
      }
    checkBoxs();
    
    
 $('.features i').click(function () {
     if ($(this).hasClass('fa-chevron-right')) {
          
          $('.features .active').fadeOut(100, function () {
            $(this).removeClass('active').next('.box').addClass('active').fadeIn();
            
            checkBoxs();
          });
     }else {
            
          $('.features .active').fadeOut(100, function () {
            $(this).removeClass('active').prev('.box').addClass('active').fadeIn();
            
            checkBoxs();
          });
     } 
       });
    
    $(".subscribe img").click(function(){
         $("input").animate({
            height: 'toggle'
        });
    });
 
    
        
     
    
    
   $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#myBtn').fadeIn('slow');
        } else {
            $('#myBtn').fadeOut('slow');
        }
    });
    $('#myBtn').click(function(){
         $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });


    
    
    var modal = document.getElementById('id00');

   window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }       
}
  
 
});