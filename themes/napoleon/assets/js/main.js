(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();







  /*Start Of Ranojit*/

$('div.fl-tabs button').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('div.fl-tabs button').removeClass('current');
    $('.fl-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
});

var swiper = new Swiper('.restaurantGallerySlider', {
    slidesPerView: 2,
    loop: true,
    navigation: {
      nextEl: '.slider1-arrows .swiper-button-next',
      prevEl: '.slider1-arrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    }
  });



var swiper = new Swiper('.restaurantTestiSlider', {
    slidesPerView: 3,
    loop: true,
    navigation: {
      nextEl: '.restaurantTestiSliderArrows .swiper-button-next',
      prevEl: '.restaurantTestiSliderArrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    }
  });


  /*Start Of Noyon*/

  
  var swiper = new Swiper('.jBnrSlider', {
    slidesPerView: 3,
    loop: true,
    navigation: {
      nextEl: '.slider1-arrows .swiper-button-next',
      prevEl: '.slider1-arrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });




  
  var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 4,
    loop: true,
    navigation: {
      nextEl: '.slider1-arrows .swiper-button-next',
      prevEl: '.slider1-arrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });


  function holdeWidth(){
    var padding = 15, 
    offset = 0,
    winW = $(window).width(),
    conW = $('.container').outerWidth(),
    conWleft = (winW - conW) / 2;
    $('.visite-sec-wrap').css('margin-left', (conWleft+padding+offset));
  }
  holdeWidth();
  $(window).resize(function(){
    holdeWidth()
  });
  
  var swiper = new Swiper('.visiteSlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.slider1-arrows .swiper-button-next',
      prevEl: '.slider1-arrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
    }
  });


 



  /*Start Of Milon*/





  /*Start Of Shariful*/
  function npCasinoHolderwidth(){
    var padding = 15;
    var offset = 240;
    var winWidth = $(window).width();
    var conW = $('.container').outerWidth();
    var conLft = (winWidth - conW) / 2;
    $('.npCasinoImgHolder').css('margin-left', (conLft + padding + offset));
  }
  npCasinoHolderwidth();
  var swiper = new Swiper('.np-casino-img-slider',{
    slidesPerView: 2,
    loop: true,
    navigation: {
      nextEl: '.npCasinoImgArrows .swiper-button-next',
      prevEl: '.npCasinoImgArrows .swiper-button-prev',
    },
  });


  function npCasinoDesHolderwidth(){
    var padding = 15;
    var offset = 240;
    var winWidth = $(window).width();
    var conW = $('.container').outerWidth();
    var conLft = (winWidth - conW) / 2;
    $('.np-casino-des-holder').css('margin-left', (conLft + offset));
  }
  npCasinoDesHolderwidth();
  var swiper = new Swiper('.np-casino-des-slider',{
    slidesPerView: 2.5,
    loop: true,
    navigation: {
      nextEl: '.npCasinoDesArrows .swiper-button-next',
      prevEl: '.npCasinoDesArrows .swiper-button-prev',
    },
  });







    new WOW().init();

})(jQuery);