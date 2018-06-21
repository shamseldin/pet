$(document).ready(function(){
     $(".RESOURCES").click(function(){
        $(".dropdown-content").animate({
            height: 'toggle'
        });
    });
    
    $("#close").click(function(){
         $(this).hide();
         $("#open").show();
     });
     
     $("#open").click(function(){
        $(this).hide();
         $("#close").show();
     }); 
 $("html").niceScroll({
         cursorcolor: '#00a79d'
     });
    
       
    var modal = document.getElementById('id01');

   window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
     });
