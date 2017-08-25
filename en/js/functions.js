$(document).ready(function() {
    $("#sticker").sticky({
        topSpacing: 0
    });

    $("#owl-demo").owlCarousel({
        autoPlay: 7000,
        items: 5,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3]
    });

    $("#learning-items").owlCarousel({
        autoPlay: 4000,
        items: 1,
        singleItem : true,
        transitionStyle : "fade",
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1]
    });

    $(function(){
      $("#typed").typed({
        strings: ["pixelart"],
        typeSpeed: 300,
      });
  });


  $('.feature-btns button').on('click', function() {
    $('.feature-btns button').removeClass('active-btn');
    $(this).addClass('active-btn');
  });

  $('.players').on('click', function() {
    $('#screens, #enclosures').addClass('hide-feature');
    $('#players').removeClass("hide-feature");
  });

  $('.screens').on('click', function() {
    $('#players, #enclosures').addClass('hide-feature');
    $('#screens').removeClass('hide-feature');
  });

  $('.enclosures').on('click', function() {
    $('#players, #screens').addClass('hide-feature');
    $('#enclosures').removeClass('hide-feature');
  });
}); //end ready
