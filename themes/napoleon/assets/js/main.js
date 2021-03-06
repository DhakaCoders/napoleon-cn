(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});


$('.hdr-language ul li').first().find('a').addClass('lang-active');
$('.hdr-language ul li a').on('click', function(){
  $(this).addClass('lang-active');
  $(this).parent().siblings().find('.lang-active').removeClass('lang-active');
});


/**
Dynamic containers
*/
function rgsHolderWidth(){
  var padding = 15;
  var offset = 0;
  var winW = $(window).width();
  if( $('.np-roulette-sec .container').length ){
    conW = $('.np-roulette-sec .container').outerWidth();
  }else if( $('.np-ad-expert-sec .container').length ){
    conW = $('.np-ad-expert-sec .container').outerWidth();
  }else{
    conW = $('header .container').outerWidth();
  }
  var conWleft = (winW - conW) / 2;
  $('.rgsHolder').css('padding-left', (conWleft+padding+offset));
}
rgsHolderWidth();	

function rgsHolderWidth1(){
  var padding = 15;
  var offset = 0;
  var winW = $(window).width();
  var conW = $('.restaurant-tab-section .container').outerWidth();
  var conWleft = (winW - conW) / 2;
  $('.rgsHolder1').css('margin-left', (conWleft+padding+offset));
}
rgsHolderWidth1();

function vswWidth(){
  var padding = 15, 
  offset = 0,
  winW = $(window).width(),
  conW = $('.container').outerWidth(),
  conWleft = (winW - conW) / 2;
  $('.visite-sec-wrap').css('margin-left', (conWleft+padding+offset));
}
vswWidth();

function rtsHolderWidth(){
  var padding = 15, 
      offset = 0,
      winW = $(window).width(),
      conW = $('.container').outerWidth(),
      conWleft = (winW - conW) / 2;
  $('.rtsHolder').css('margin-left', (conWleft+padding+offset));
}
rtsHolderWidth();

function wswWidth(){
  var padding = 15, 
  offset = 0,
  winW = $(window).width(),
  conW = $('.container').outerWidth(),
  conWleft = (winW - conW) / 2;
  $('.wellcome-sec-wrap').css('margin-left', (conWleft+padding+offset));
}
wswWidth();

function sha1(){
  var lftoffset = 130;
  var windowW = $(window).width();
  var containerW = $('.container').outerWidth();
  var containerLft = (windowW - containerW) / 2;
  $('.np-ad-package-holder').css('margin-left', (containerLft+lftoffset));
}
sha1();

function sha2(){
  var rgtoffset = 100;
  var windowW = $(window).width();
  var containerW = $('.container').outerWidth();
  var containerRgt = (windowW - containerW) / 2;
  $('.np-ad-btm-package-holder').css('margin-right', (containerRgt+rgtoffset));
}
sha2();
$(window).resize(function(){
  rgsHolderWidth();
  rgsHolderWidth1();
  vswWidth();
  rtsHolderWidth();
  wswWidth();
  sha1();
  sha2();
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

$('.toggle-btn').on('click', function(){
  $(this).toggleClass('menu-expend');
  $('.toggle-bar ul').slideToggle(500);
});

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



/*
Blog 1
*/
$('div.fl-tabs button').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('div.fl-tabs button').removeClass('current');
    $('.fl-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
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

var swiper = new Swiper('.restaurantTestiSlider', {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.restaurantTestiSliderArrows .swiper-button-next',
      prevEl: '.restaurantTestiSliderArrows .swiper-button-prev',
    }
  });

var video = $('.fl-vdo').get(0);
$(document).delegate('.fl-play-btn', 'click', function() {
    //video.load();
    video.play();
    $('.fl-play-btn').removeClass('show').addClass('hide');
    $('.fl-push-btn').addClass('show').removeClass('hide');
});

$(document).delegate('.fl-push-btn', 'click', function() {
    if (video.paused !== true && video.ended !== true) {
        video.pause();
    $('.fl-play-btn').removeClass('hide').addClass('show');
    $('.fl-push-btn').addClass('hide').removeClass('show');
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

if (windowWidth <= 767) {
  
  if( $('.xsRestaurantTabsSlider12').length ){
      $('.xsRestaurantTabsSlider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
            }
          }
        ]
      });
  }
}
if (windowWidth <= 767) {
  var swiper2 = new Swiper('.xsRestaurantTabsSlider', {
    slidesPerView: 'auto',
    loop: false,
    preventClicks: false,
    preventClicksPropagation: false,
    centeredSlides: true,
  });
  //swiper2.slideTo(numberPage,1000,false);
  $('.xsRestaurantTabsSliderItem').on('click', function(){
    slideno = $(this).attr('data-slide');
    tab_id = $(this).attr('data-tab');
    swiper2.slideTo(slideno,1000,false);
    //$('div.fl-tabs button').removeClass('current');
    //$('.fl-tab-content').removeClass('current');
    //$(this).addClass('current');
    //$("#"+tab_id).addClass('current');
  });
}

/*
Blog 2
*/
var swiper = new Swiper('.jBnrSlider', {
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: '.jBnrSlider-arrows .swiper-button-next',
    prevEl: '.jBnrSlider-arrows .swiper-button-prev',
  },
  breakpoints: {
    575: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1199: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1920: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
  }
});


if (windowWidth <= 768) {
  var swiper = new Swiper('.dfpNgiSlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.dfpNgiSlider-arrows .swiper-button-next',
      prevEl: '.dfpNgiSlider-arrows .swiper-button-prev',
    },
  });
}


if( windowWidth < 1199 ){ 
  var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.catagorySlider-arrows .swiper-button-next',
      prevEl: '.catagorySlider-arrows .swiper-button-prev',
    },
    breakpoints: {
       639: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1199: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });
}

$('.ftr-top-row-col h5').on('click', function(){
  $(this).toggleClass('ftr-row-title-rotet');
  $(this).parent().siblings().find('h5').removeClass('ftr-row-title-rotet');
  $(this).parent().find('.xs-ftr-mbl-accrdn').slideToggle(300);
  $(this).parent().siblings().find('.xs-ftr-mbl-accrdn').slideUp(300);
});
 



/*
Blog 3
*/

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

var dataPosts = $("header").attr('data-posts');
if( dataPosts ){
  $('.hdr-top-menu ul li.nieuws a').append('<span>'+dataPosts+'</span>');
}

$('.goToform a').on('click', function(e){
  e.preventDefault();
    $('html,body').animate({
        scrollTop: $("#booking-form").offset().top
    }, 1000);
});

$( document ).ready(function() {
  $('body').addClass('jsLoaded');
});

AOS.init({ easing: 'ease-in-out-cubic', disable: false, once: true, duration: 800 });

})(jQuery);