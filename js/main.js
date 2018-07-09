
//menu
$(document).ready(function() {
$('html').on('DOMMouseScroll mousewheel', function (e) {
  if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
    console.log('Down');
    $( "#header-nav" ).addClass( "hide-nav-bar" );
  } else {
    console.log('Up');
    $( "#header-nav" ).removeClass( "hide-nav-bar" );
  }

});


  });

  //scroll animatie
    $(function() {
    var $item = $(' li ');

    $item.on('click', 'a', function(event) {
      var $section = $($(this).attr('href'));
      var sectionTop = $section.offset().top;
      $( "#header-nav" ).addClass( "hide-nav-bar" );

      $('html, body').stop().animate({scrollTop: sectionTop}, 500);
      event.preventDefault();
    });

    $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();

    $item.each(function() {
      var $section = $($(this).find('a').attr('href'));
      var sectionTop = $section.offset().top - 60;
      var sectionHeight = $section.height();

      if (sectionTop <= scrollTop && (sectionTop + sectionHeight) > scrollTop) {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
      }
    });
  });
  });


  //GOOGLE MAPS KAART
  function initMap() {
          var myLatLng = {lat: 52.4343891, lng: 4.6521299 };

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Woonplaats'
          });
        }



  //type effect
//   $(function() {
//   var $item = $(' li ');
//
//   $item.on('click', 'a', function(event) {
//     var $section = $($(this).attr('href'));
//     var sectionTop = $section.offset().top;
//     $('html, body').stop().animate({scrollTop: sectionTop}, 500);
//     event.preventDefault();
//   });
//
//   $(window).scroll(function() {
//   var scrollTop = $(this).scrollTop();
//
//   $item.each(function() {
//     var $section = $($(this).find('a').attr('href'));
//     var sectionTop = $section.offset().top - 60;
//     var sectionHeight = $section.height();
//
//     if (sectionTop <= scrollTop && (sectionTop + sectionHeight) > scrollTop) {
//       $(this).addClass('active');
//       $(this).siblings().removeClass('active');
//     }
//   });
// });
// });
