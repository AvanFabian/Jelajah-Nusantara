$(document).ready(function() {
    var carousel = $('.owl-carousel').owlCarousel({
       items: 1,
       loop: true,
       margin: 10,
       nav: true,
       dots: false,
       onInitialized: showFirstSection // Show the first section initially
    });
 
    function showFirstSection(event) {
       var $sections = $('.section');
       $sections.eq(0).fadeIn(); // Show the first section
    }
 
    // Handle slide button click event
    $('.slide-button').on('click', function() {
       var $sections = $('.section');
       var currentSection = $('.owl-item.active').index();
       var nextSection = (currentSection + 1) % $sections.length;
 
       $sections.fadeOut(); // Hide all sections
       $sections.eq(nextSection).fadeIn(); // Show the next section
    });
 });
 