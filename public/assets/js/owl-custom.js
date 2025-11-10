// owl-carousel 
$(document).ready(function() {
 
  $("#owl").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      paginationSpeed : 400,
      singleItem:false,
      items : 5,
      autoPlay : 3000,
      rewindSpeed:100,
      stopOnHover: true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
  });

  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
});