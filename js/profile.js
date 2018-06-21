$(document).ready(function(){

    
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