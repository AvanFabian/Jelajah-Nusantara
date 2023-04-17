// BUTTON START

$(window).ready(function(){
  $(".boton").wrapInner('<div class=botontext></div>');
      
      $(".botontext").clone().appendTo( $(".boton") );
      
      $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');
      
      $(".twist").css("width", "25%").css("width", "+=3px");
});

    // Get the modal
var popup = document.querySelector(".popup");

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
});

