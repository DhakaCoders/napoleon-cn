(function($) {
  var ftrPlus = 50;
  if($('#agenda_post').length){
    var postCanBeLoaded = true; // this param allows to initiate the AJAX call only if necessary
    $(window).scroll(function(){
      var top_of_element = ($(".footer-top-sec").offset().top) + ftrPlus;
      var bottom_of_element = $(".footer-top-sec").offset().top + $(".footer-top-sec").outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();
      if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && postCanBeLoaded ){
      //init
        var postNotID = $('#ajax-agenda').data('postnot');
        var postCount = $('#agenda_post');
        var page = postCount.data('page');
        var newPage = page + 1;
        var ajaxurl = postCount.data('url');
        console.log(newPage);
        //ajax call
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                postnot_id: postNotID,
                action: 'ajax_script_load_more'
        
            },
            beforeSend: function ( xhr ) {
              $('#ajxaloader1').show();
              postCanBeLoaded = false;
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                //check
                if (response == 0) {
                  $('#agenda-content').append('<div class="clearfix"></div><div class="text-center"><p>No more post.</p></div>');
                    $('#ajxaloader1').hide();
                } else {  
                    function post_load()
                    {
                      $('#ajxaloader1').hide();
                    postCount.data('page', newPage);
                    $('#agenda-content').append(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                      postCanBeLoaded = true;
                    }
                    setTimeout(post_load,2500);
                }
            }
        });
    }
    });
  }

  if($('#agenda_cat').length){
    var catCanBeLoaded = true; // this param allows to initiate the AJAX call only if necessary
    $(window).scroll(function(){
      var top_of_element = ($(".footer-top-sec").offset().top) + ftrPlus;
      var bottom_of_element = $(".footer-top-sec").offset().top + $(".footer-top-sec").outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();
      if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && catCanBeLoaded ){
      //init
        var postNotID = $('#ajax-agenda_cat').data('postnot');
        var catID = $('#ajax-agenda_cat').data('catid');
        var agendaCatCount = $('#agenda_cat');
        var page2 = agendaCatCount.data('page2');
        var newPage2 = page2 + 1;
        var ajaxurl = agendaCatCount.data('url');
        console.log(newPage2);
        //ajax call
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page2,
                postnot_id: postNotID,
                catid: catID,
                action: 'ajax_script_load_more_agenda_cat'
        
            },
            beforeSend: function ( xhr ) {
              $('#ajxaloader2').show();
              catCanBeLoaded = false;
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                //check
                if (response == 0) {
                  $('#agenda_cat-content').append('<div class="clearfix"></div><div class="text-center"><p>No more post.</p></div>');
                    $('#ajxaloader2').hide();
                } else {  
                    function agendaCatLoad()
                    {
                      $('#ajxaloader2').hide();
                      agendaCatCount.data('page2', newPage2);
                      $('#agenda_cat-content').append(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                      catCanBeLoaded = true;
                    }
                    setTimeout(agendaCatLoad,2500);
                }
            }
        });
    }
    });
  }
  if($('#arrange_post').length){
    var arrangeCanBeLoaded = true; // this param allows to initiate the AJAX call only if necessary
    $(window).scroll(function(){
      var top_of_element = ($(".footer-top-sec").offset().top) + ftrPlus;
      var bottom_of_element = $(".footer-top-sec").offset().top + $(".footer-top-sec").outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();
      if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && arrangeCanBeLoaded ){
      //init
        var arrCount = $('#arrange_post');
        var page3 = arrCount.data('page3');
        var newPage3 = page3 + 1;
        var ajaxurl = arrCount.data('url');
        //ajax call
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page3,
                action: 'ajax_script_load_more_arrange'
        
            },
            beforeSend: function ( xhr ) {
              $('#ajxaloader3').show();
              arrangeCanBeLoaded = false;
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                //check
                if (response == 0) {
                  $('#arrange-content').append('<div class="clearfix"></div><div class="text-center"><p>No more post.</p></div>');
                    $('#ajxaloader3').hide();
                } else {  
                    function arrange_post_load()
                    {
                      $('#ajxaloader3').hide();
                    arrCount.data('page3', newPage3);
                    $('#arrange-content').append(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                      arrangeCanBeLoaded = true;
                    }
                    setTimeout(arrange_post_load,2500);
                }
            }
        });
    }
    });
  }
})(jQuery);