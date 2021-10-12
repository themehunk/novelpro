
/* LOADER */
jQuery(window).load(function(){
  var varvi = jQuery("#vidi").val();
  var video_frame = jQuery('#video');
  var video_frameSrc = new Array();

    if( video_frame.length ){
    jQuery.each( video_frame, function(i, f){
      video_frameSrc[i] = jQuery(f).attr('src');
            /*remove the src attribute so window will ignore these iframes*/
            jQuery(f).attr('src',varvi);
        }); 
    if(jQuery('.overlayloader').length){
    jQuery(".loader").delay(2000).fadeOut("slow");
    jQuery(".overlayloader").delay(2000).fadeOut("slow");
  }
    setTimeout(video_display_iframe, 2000);
  }
  
  function video_display_iframe() {
    if( video_frame.length ){
      jQuery.each( video_frame, function(a, x){
        /*put the src attribute value back*/
        jQuery(x).attr('src', video_frameSrc[a]);
      });
    } 
  }
if(jQuery('.overlayloader').length){
jQuery(".loader").fadeOut("slow");
jQuery(".overlayloader").delay(1000).fadeOut("slow");
}
});
// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(document).ready(function() {
/*  Dropdown menus*/   
    function thDropdownMenu() {
        var wWidth = jQuery(window).width();
        if(wWidth > 1024) {
            jQuery('.navigation ul.sub-menu, .navigation ul.children').hide();
            var timer;
            var delay = 100;
            jQuery('.navigation li').hover( 
              function() {
                var $this = jQuery(this);
                timer = setTimeout(function() {
                    $this.children('ul.sub-menu, ul.children').slideDown('fast');
                }, delay);
                
              },
              function() {
                jQuery(this).children('ul.sub-menu, ul.children').hide();
                clearTimeout(timer);
              });

            //keynavigation
       jQuery(".menu-item a").focusin(function(){
            jQuery(this).parent().prev().find('.sub-menu').css("display","none");
            jQuery('+ .sub-menu', this).css("display","block");
           });

        } else {
            jQuery('.navigation li').unbind('hover');
            jQuery('.navigation li.active > ul.sub-menu, .navigation li.active > ul.children').show();
        }
    }
    thDropdownMenu();
    jQuery(window).resize(function() {
        thDropdownMenu();
    });

        //auto height
    if ( jQuery( ".not_home" ).length ) {
        var menu_h =jQuery('.not_home').height();
        jQuery('.page_heading_container').css( "padding-top", menu_h );
    }
 /* Vertical menus toggles*/
    jQuery('.widget .menu-menu-1-container, .navigation .menu').addClass('toggle-menu');
    jQuery('.toggle-menu ul.sub-menu, .toggle-menu ul.children').addClass('toggle-submenu');
    jQuery('.toggle-menu ul.sub-menu').parent().addClass('toggle-menu-item-parent');
    jQuery('.toggle-menu .toggle-menu-item-parent').append('<span class="toggle-caret" tabindex="0"><i class="fa fa-plus"></i></span>');
    jQuery('.toggle-caret').click(function(e) {
        e.preventDefault();
        jQuery(this).parent().toggleClass('active').children('.toggle-submenu').slideToggle('fast');
    });

    //keynavigation keypress
    jQuery('.toggle-caret').keypress(function(e) {
        e.preventDefault();
        jQuery(this).parent().toggleClass('active').children('.toggle-submenu').slideToggle('fast');
    });

// Responsive Navigation
/* <![CDATA[ */
var themehunk_customscript = {"responsive":"1","nav_menu":"secondary"};
/* ]]> */
if (themehunk_customscript.responsive && themehunk_customscript.nav_menu != 'none') {
    jQuery(document).ready(function($){
        // merge if two menus exist
        if (themehunk_customscript.nav_menu == 'both') {
            jQuery('.navigation').not('.mobile-menu-wrapper').find('.menu').clone().appendTo('.mobile-menu-wrapper').hide();
        }    
        jQuery('.toggle-mobile-menu').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            jQuery('body').toggleClass('mobile-menu-active');
        });
        
        // prevent propagation of scroll event to parent
        jQuery(document).on('DOMMouseScroll mousewheel', '.mobile-menu-wrapper', function(ev) {
            var $this = jQuery(this),
                scrollTop = this.scrollTop,
                scrollHeight = this.scrollHeight,
                height = $this.height(),
                delta = (ev.type == 'DOMMouseScroll' ?
                    ev.originalEvent.detail * -40 :
                    ev.originalEvent.wheelDelta),
                up = delta > 0;
        
            var prevent = function() {
                ev.stopPropagation();
                ev.preventDefault();
                ev.returnValue = false;
                return false;
            }

            if ( jQuery('a#pull').css('display') !== 'none' ) { // if toggle menu button is visible ( small screens )
        
              if (!up && -delta > scrollHeight - height - scrollTop) {
                  // Scrolling down, but this will take us past the bottom.
                  $this.scrollTop(scrollHeight);
                  return prevent();
              } else if (up && delta > scrollTop) {
                  // Scrolling up, but this will take us past the top.
                  $this.scrollTop(0);
                  return prevent();
              }
            }
        });
    }).on('click', function(event) {

        var $target = jQuery(event.target);
        if ( ( $target.hasClass("fa") && $target.parent().hasClass("toggle-caret") ) ||  $target.hasClass("toggle-caret") ) {// allow clicking on menu toggles
            return;
        }

        jQuery('body').removeClass('mobile-menu-active');
    });
}  
//Gallery
    jQuery(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'facebook', slideshow: 3000, autoplay_slideshow: false, social_tools: false});
    jQuery(".gallery_blog:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'facebook', slideshow: 3000, autoplay_slideshow: false, social_tools: false});
    jQuery(".gallery_portfolio a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'facebook', slideshow: 3000, autoplay_slideshow: false, social_tools: false});

function validUrlCheck(url){
  var url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
 return url_validate;
}

if ( jQuery( ".home" ).length ) {
  jQuery('.menu li a:first').addClass('active');
  jQuery(window).scroll(function(event){
    var scrollPos = jQuery(document).scrollTop();
    if (scrollPos >= 180) {
        jQuery('a.page-scroll').each(function () {
        var currLink = jQuery(this);
        var url =currLink.attr("href");
      var url_validate = validUrlCheck(url);
      if(!url_validate.test(url)){
         var refElement = jQuery(currLink.attr("href"));
        if ( jQuery(url).length ) {
          if (refElement.position().top - 100 <= scrollPos && refElement.position().top - 100 + refElement.height() > scrollPos) {
            jQuery('.menu li a').removeClass('active');
            currLink.addClass("active");
          }
        }
      }
    });
} else {
    jQuery('.menu li a').removeClass('active');
    jQuery('.menu li a:first').addClass('active');
    }
})
}
    jQuery('a.page-scroll').bind('click', function(event) {
            var $anchor = jQuery(this);
            var url = $anchor.attr('href');
            var url_validate = validUrlCheck(url);
            
            if(!url_validate.test(url)){
              if ( jQuery( url ).length ) {
            jQuery('html, body').stop().animate({
            scrollTop: jQuery(url).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
       }
      }
    });
// Highlight the top nav as scrolling occurs
//jQuery('body').scrollspy({
//    target: '.navbar-fixed-top'
//})
jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() >= jQuery('.blackwell_slider').height()) {
        jQuery('nav').addClass('navbar-shrink');
    } else {
        jQuery('nav').removeClass('navbar-shrink');
    }
});
jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() >= jQuery('.navbar-header').height()) {
        jQuery('nav').addClass('navbar-shrink');
    } else {
        jQuery('nav').removeClass('navbar-shrink');
    }
});
// home Slider
if (jQuery(".flexslider").length) {
 jQuery(window).load(function() {
var newspeed = jQuery("#txt_slidespeed").val();
var flex_nav = jQuery("#novelpro_slidernav").val();
if (flex_nav > 1) {
  flex_nav = true;
}
else{
  flex_nav = false;
}
 jQuery('.flexslider').flexslider({
         animation: "fade",
         fadeFirstSlide: false,
         slideshowSpeed: newspeed,
         slide_easing: 'easeInOutCubic',
         animationSpeed: 1000,
         direction: "horizontal",
         directionNav: flex_nav,
         controlNav: true,
         video: true,
         slideshow: true, 
         pauseOnHover: true, 
         prevText: "",           //String: Set the text for the "previous" directionNav item
         nextText: "",   
     });
 });
}
 jQuery(function() {
   jQuery('.hero-id').bind('click', function(e){
   jQuery('html, body').animate({ scrollTop:  jQuery( jQuery(this).attr('href')).offset().top}, 500, 'easeInOutCubic');
  event.preventDefault();});
});
// Highlight the top nav as scrolling occurs
jQuery('body').scrollspy({
    target: '.navbar-fixed-top'
})
// testimonial
var testinewspeed = jQuery("#testimonial_slidespeed").val();
jQuery('.bxslider').bxSlider({
        auto: true,
        autoControls: true,
        captions: true,
        mode: 'fade',
        adaptiveHeight: true,
        pause:testinewspeed,
    });

//owl-brand-slider
jQuery(document).ready(function() {
 var newnumb = jQuery("#slidenumber").val();
 jQuery("#owl-demo").owlCarousel({
    navigation : true,
    navigationText: [
      "<i class='fa fa-angle-right'></i>",
      "<i class='fa fa-angle-left'></i>"
      ],
      items : newnumb, //10 items above 1000px browser width
      itemsDesktop : [1000,newnumb], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile :[480,1], // itemsMobile disabled - inherit from itemsTablet option
      autoPlay : true,
      stopOnHover : true,
  });
 
});

var backtotop = jQuery("#back_to_top").val();
if(backtotop!=='1'){
// Show-hide Scroll to top & move-to-top arrow
  jQuery("body").prepend("<a id='move-to-top' class='animate hiding' href='#header'><i class='fa fa-angle-up'></i></a>");  
  var scrollDes = 'html,body';  
  /*Opera does a strange thing if we use 'html' and 'body' together so my solution is to do the UA sniffing thing*/
  if(navigator.userAgent.match(/opera/i)){
    scrollDes = 'html';
  }
  //show ,hide
       jQuery(window).scroll(function(){
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#move-to-top').fadeIn();
            } else {
                jQuery('#move-to-top').fadeOut();
            }
        }); 
        jQuery('#move-to-top').click(function(){
            jQuery("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
}
        //google recaptcha
  if( jQuery('.captcha_wrapper').length > 0 ) {
    jQuery('form').on('submit', function(e) {
       if(grecaptcha.getResponse() == "") {
            e.preventDefault();
            jQuery('.captcha_wrapper').prepend('<span id="rc_error"> Please Select Captcha. </span>');
           // alert("You can't proceed!");
        } else {
            jQuery('.captcha_wrapper').prepend('<span id="rc_sucess">Thank you. </span>');
            alert("Thank you");
        }
    });
}
      
});


/*------------parallax-js----------*/
jQuery(function(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 (function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);


( function( $ ) {
  
  // Setup variables
  $window = $(window);
  $body = $('body');
  
    //FadeIn all sections   
 
  function adjustWindow(){
    
    // Init Skrollr
    var s = skrollr.init({
        render: function(data) {
        
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
    
    // Get window size
      winH = $window.height();
      
      // Keep minimum height 550
      if(winH <= 550) {
      winH = 550;
    } 
      
      
  }
    
} )( jQuery );
}
 else {
       (function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);


( function( $ ) {
  
  // Setup variables
  $window = $(window);
  $body = $('body');
  
    //FadeIn all sections   
  $body.imagesLoaded( function() {
    setTimeout(function() {
          
          // Resize sections
          adjustWindow();
          
          // Fade in sections
        $body.removeClass('loading').addClass('loaded');
        
    }, 800);
  });
  
  function adjustWindow(){
    
    // Init Skrollr
    var s = skrollr.init({
        render: function(data) {
        
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
    
    // Get window size
      winH = $window.height();
      
      // Keep minimum height 550
      if(winH <= 550) {
      winH = 550;
    } 
      
      
  }
    
} )( jQuery );
    }
});

  //map scrolling
jQuery(document).ready(function() {
    jQuery('.map').click(function () {
       jQuery('.map iframe').css("pointer-events", "auto");
    });
    
    jQuery( ".map" ).mouseleave(function() {
      jQuery('.map iframe').css("pointer-events", "none"); 
    });
 });  


/*------------wow animation------------*/
if ( jQuery( "#animate" ).length ) {
wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
         // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
}