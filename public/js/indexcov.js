// Toggle Pop-up
function toggle() {
  var popup = document.getElementById("popup");
  popup.classList.toggle("active");
}

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
// window.addEventListener("click", function(event) {
//   if (event.target == popup) {
//     popup.style.display = "none";
//   }
// });


// POP UP
$(document).ready(function() {
  $('#open').click(function() {
    $('.model-container').addClass('show-popup');
  });

  $('#close').click(function() {
    $('.model-container').removeClass('show-popup');
  });

  $('.model-container').on('click', function(e) {
    if ($(e.target).hasClass('model-container')) {
      $('.model-container').removeClass('show-popup');
    }
  });
});



