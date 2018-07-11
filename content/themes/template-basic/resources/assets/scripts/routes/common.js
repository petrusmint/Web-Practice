export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired      
         
    $(document).ready(function(){        
        $('.carousel').carousel({
          interval: false,
        });
        $('.btn-blue').hover(function(){
          $(this).parent('.blog-col').toggleClass('div-hover');
        });    
         
         $(window).scroll(function() {
           if ($(this).scrollTop() > 1){  
             $('.content-area').addClass('scrolled');
           }
           else{
             $('.content-area').removeClass('scrolled');
           }
         });
        $('.wpcf7-form .wpcf7-list-label').append('<span class="for-check"></span>');
   });
    /*==================================MENU SCROLL=====================================================*/
    var sections = $('section,header'),
      nav = $('nav'),
      nav_height = nav.outerHeight();
      //console.log(nav_height);
    $(window).on('scroll', function () {
      var cur_pos = $(this).scrollTop();
      sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();
        
        if (cur_pos + 150 >= top && cur_pos <= bottom) {
          nav.find('a').parent('li').removeClass('active');
          sections.parent('li').removeClass('active');
          $(this).parent('li').addClass('active');
          nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');

          if( jQuery(this).hasClass("banner") ){
            jQuery('nav a:contains("Home")').parent('li').addClass('active');
          }else{
            jQuery('nav a:contains("Home")').parent('li').removeClass('active');
          }
        }
      }); 
    });
    $('#banner, nav').find('a').on('click', function () {
      var $el = $(this),
          id = $el.attr('href');

        if(id.indexOf("#") >= 0 && window.location.href.indexOf("?s") < 0){
          $('html, body').animate({
              scrollTop: $(id).offset().top - (nav_height-1),
            }, 1000);
             //window.location.hash = id;
            //console.log("animate yow!");
             if(history.pushState) {
                  history.pushState(null, null, id);
              }
              else {
                  location.hash = id;
              }
            return false;
        }          
          
    });

    $(document).ready(function(){ 
      if(window.location.hash.length >= 1) {
        var str = window.location.hash.split("#")[1].split('-')[0];
        if(str){
          str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
              return letter.toUpperCase();
          });
        }
        jQuery("#menu-main-menu li a:contains("+str+")").click();
       }
    });
  },
};
