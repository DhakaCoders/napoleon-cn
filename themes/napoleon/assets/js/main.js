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


function rgsHolderWidth(){
  var padding = 15;
  var   offset = 100;
  var    winW = $(window).width();
  var   conW = $('.container').outerWidth();
  var conWleft = (winW - conW) / 2;
  $('.rgsHolder').css('margin-left', (conWleft+padding+offset));
}
rgsHolderWidth();
$(window).resize(function(){
  rgsHolderWidth();
});

var swiper = new Swiper('.restaurantGallerySlider', {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.restaurantGallerySliderArrows .swiper-button-next',
      prevEl: '.restaurantGallerySliderArrows .swiper-button-prev',
    }
  });




function rtsHolderWidth(){
  var padding = 15, 
      offset = 100,
      winW = $(window).width(),
      conW = $('.container').outerWidth(),
      conWleft = (winW - conW) / 2;
  $('.rtsHolder').css('margin-left', (conWleft+padding+offset));
}
rtsHolderWidth();
$(window).resize(function(){
  rtsHolderWidth()
});
var swiper = new Swiper('.restaurantTestiSlider', {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.restaurantTestiSliderArrows .swiper-button-next',
      prevEl: '.restaurantTestiSliderArrows .swiper-button-prev',
    }
  });


/*var myVideo = document.getElementById('fl-vdo'); 


$('.fl-play-btn').on('click', function(){
    if (myVideo.paused) {
        myVideo.play();  
    } 
});
  
$('.fl-push-btn').on('click', function(){
    if (myVideo.paused) {
      myVideo.pause();
    }
});  
*/

var video = $('.fl-vdo').get(0);

$(document).delegate('.fl-play-btn', 'click', function() {
    video.load();
    video.play();
    //$('.fl-play-btn').addClass('hide');
    //$('.fl-push-btn').addClass('show');
});

$(document).delegate('.fl-push-btn', 'click', function() {
    if (video.paused !== true && video.ended !== true) {
        video.pause();
       //$('.fl-play-btn').addClass('show');
        //$('.fl-push-btn').addClass('hide');
    } /*else {
        $('.fl-push-btn > img').attr('src', 'image/play.png');
        video.play();
    }*/
});

/**
Sidebar menu
*/
if (windowWidth <= 991) {
  $('.xs-hamburger-btn').on('click', function(e){
    $('.xs-nav-menu-cntlr').addClass('opacity-1');
    $('.bdoverlay').addClass('active');
    $('body').addClass('active-scroll-off');
    $(this).addClass('active-collapse');
  });
  $('.closebtn-wrp').on('click', function(e){
    $('.bdoverlay').removeClass('active');
    $('.xs-nav-menu-cntlr').removeClass('opacity-1');
    $('body').removeClass('active-scroll-off');
    $('.xs-hamburger-btn').removeClass('active-collapse');
  });
  
  $('li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).parent().siblings().find('.sub-menu').slideUp(300);
    $(this).parent().find('.sub-menu').slideToggle(300);
    $(this).toggleClass('sub-menu-active');

  });
}



  /*Start Of Noyon*/

  
  var swiper = new Swiper('.jBnrSlider', {
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

  function wswWidth(){
    var padding = 15, 
    offset = 0,
    winW = $(window).width(),
    conW = $('.container').outerWidth(),
    conWleft = (winW - conW) / 2;
    $('.wellcome-sec-wrap').css('margin-left', (conWleft+padding+offset));
  }
  wswWidth();
  $(window).resize(function(){
    wswWidth()
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
  

   var swiper = new Swiper('.hmFtrGlrySlider', {
    slidesPerView: 5,
    loop: true,
    navigation: {
      nextEl: '.slider1-arrows .swiper-button-next',
      prevEl: '.slider1-arrows .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 5,
        spaceBetween: 0,
      },
      1920: {
        slidesPerView: 5,
        spaceBetween: 0,
      },
    }
  });


   $('.ftr-top-row-col h5').on('click', function(){
    $(this).toggleClass('ftr-row-title-rotet');
    $(this).parent().siblings().find('h5').removeClass('ftr-row-title-rotet');
    $(this).parent().find('.xs-ftr-mbl-accrdn').slideToggle(300);
    $(this).parent().siblings().find('.xs-ftr-mbl-accrdn').slideUp(300);
  });
 



  /*Start Of Milon*/
  /*
----------------------
 Tabs Js
----------------------
*/
if( $('.tabs').length ){
  $('.tabs:first').show();
  $('.tabs-menu li:first').addClass('active');

  $('.tabs-menu li').on('click',function(){
    index = $(this).index();
    $('.tabs-menu li').removeClass('active');
    $(this).addClass('active');
    $('.tabs').hide();
    $('.tabs').eq(index).show();
  });
}

/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}





  /*Start Of Shariful*/
  var offset = 130;
  var windowW = $(window).width();
  var containerW = $('.container').outerWidth();
  var containerLft = (windowW - containerW) / 2;
  $('.np-ad-package-holder').css('margin-left', (containerLft+offset));

  var rgtoffset = 100;
  var windowW = $(window).width();
  var containerW = $('.container').outerWidth();
  var containerRgt = (windowW - containerW) / 2;
  $('.np-ad-btm-package-holder').css('margin-right', (containerRgt+rgtoffset));
  







    new WOW().init();




})(jQuery);