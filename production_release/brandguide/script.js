jQuery(document).ready(function () {
  jQuery(".bag-mobile-nav-items").hide();

  jQuery(".cbag-burger-toggle").click(function () {
    jQuery(".bag-mobile-nav-items").slideToggle(200);
  });
});

jQuery(document).ready(function () {
  jQuery(".bagKitLogo").hide();
  jQuery(".colorpalette").hide();
  jQuery(".typography").hide();
  jQuery(".bestPractices").hide();

  jQuery("#bagKitLogomenu").click(function () {
    jQuery(".bagKitLogo").slideToggle(200);
  });
  jQuery("#colorpalettemenu").click(function () {
    jQuery(".colorpalette").slideToggle(200);
  });
  jQuery("#typographymenu").click(function () {
    jQuery(".typography").slideToggle(200);
  });
  jQuery("#bestPracticesmenu").click(function () {
    jQuery(".bestPractices").slideToggle(200);
  });
});

// jQuery(document).ready(function(){
//   // Add smooth scrolling to all links
//   jQuery("a").on('click', function(event) {

//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

//       // Using jQuery's animate() method to add smooth page scroll
//       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//       jQuery('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 800, function(){

//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;
//       });
//     } // End if
//   });
// });
