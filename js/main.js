/** ===============

.. Preloader
.. header_search
.. Fixed-header
.. Menu
.. Number rotator
.. Skillbar
.. Tab
.. Accordion
.. Isotope
.. Prettyphoto
.. share-icon_btn
.. Slick_slider
.. Back to top 

 =============== */



jQuery(function($) {

  "use strict";

/*------------------------------------------------------------------------------*/
/* Preloader
/*------------------------------------------------------------------------------*/
   // makes sure the whole site is loaded
    $(window).on("load",function(){
        $(".loader-blob").fadeOut(),$("#preloader").delay(300).fadeOut("slow",function(){$(this).remove()})
    })


/*------------------------------------------------------------------------------*/
/* header_search
/*------------------------------------------------------------------------------*/
            
    $(".header_search").each(function(){  
        $(".search_btn", this).on("click", function(e){
            e.preventDefault();
            $(".header_search_content").toggleClass("on");
        });

        $(".header_search_content_inner .close_btn").on("click", function(e){
            e.preventDefault();
            $(".header_search_content").removeClass("on");
        });  
    });


/*------------------------------------------------------------------------------*/
/* Fixed-header
/*------------------------------------------------------------------------------*/

    $(window).scroll(function(){
        

        if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches ) 
        {
            if ($(window).scrollTop() >= 50 ) {
                $('.ttm-stickable-header').addClass('fixed-header');
            }
            else {
                $('.ttm-stickable-header').removeClass('fixed-header');
            }
        }
    });


var themetechmount_coverimgbox = function() {

    jQuery('.tm_coverimgbox_wrapper').each(function(){
        var parentDiv = jQuery(this);
                
                parentDiv.children('.tm_coverbox_contents').on(function () {
                    parentDiv.find('.tm_coverbox_img').removeClass('active');
                    jQuery(this).next('.tm_coverbox_img').addClass('active');
                });
    });
};

/*------------------------------------------------------------------------------*/
/* Menu
/*------------------------------------------------------------------------------*/

    var menu = {
        initialize: function() {
            this.Menuhover();
        },

        Menuhover : function(){
            var getNav = $("nav.main-menu"),
                getWindow = $(window).width(),
                getHeight = $(window).height(),
                getIn = getNav.find("ul.menu").data("in"),
                getOut = getNav.find("ul.menu").data("out");
            
            if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {
                                                     
                // Enable click event
                $("nav.main-menu ul.menu").each(function(){
                    
                    // Dropdown Fade Toggle
                    $("a.mega-menu-link", this).on('click', function (e) {
                        e.preventDefault();
                        var t = $(this);
                        t.toggleClass('active').next('ul').toggleClass('active');
                    });   

                    // Megamenu style
                    $(".megamenu-fw", this).each(function(){
                        $(".col-menu", this).each(function(){
                            $(".title", this).off("click");
                            $(".title", this).on("click", function(){
                                $(this).closest(".col-menu").find(".content").stop().toggleClass('active');
                                $(this).closest(".col-menu").toggleClass("active");
                                return false;
                                e.preventDefault();
                                
                            });

                        });
                    });  
                    
                }); 
            }
        },
    };
    
    $('.btn-show-menu-mobile').on('click', function(e){
        $(this).toggleClass('is-active'); 
        $('.menu-mobile').toggleClass('show'); 
        return false;
        e.preventDefault();  
    });

    // Initialize
    $(document).ready(function(){
        menu.initialize();

    });



/*------------------------------------------------------------------------------*/
/* Animation on scroll: Number rotator
/*------------------------------------------------------------------------------*/
    
    $("[data-appear-animation]").each(function() {
    var self      = $(this);
    var animation = self.data("appear-animation");
    var delay     = (self.data("appear-animation-delay") ? self.data("appear-animation-delay") : 0);
        
        if( $(window).width() > 959 ) {
            self.html('0');
            self.waypoint(function(direction) {
                if( !self.hasClass('completed') ){
                    var from     = self.data('from');
                    var to       = self.data('to');
                    var interval = self.data('interval');
                    self.numinate({
                        format: '%counter%',
                        from: from,
                        to: to,
                        runningInterval: 2000,
                        stepUnit: interval,
                        onComplete: function(elem) {
                            self.addClass('completed');
                        }
                    });
                }
            }, { offset:'85%' });
        } else {
            if( animation == 'animateWidth' ) {
                self.css('width', self.data("width"));
            }
        }
    });

 jQuery(".ttm-circle-box").each(function () {

        var circle_box = jQuery(this);
        var fill_val = circle_box.data("fill");
        var emptyFill_val = circle_box.data("emptyfill");
        var thickness_val = circle_box.data("thickness");
        var linecap_val = circle_box.data("linecap")
        var fill_gradient = circle_box.data("gradient");
        var startangle_val = (-Math.PI / 4) * 1.5;
        if (fill_gradient != "") {
            fill_gradient = fill_gradient.split("|");
            fill_val = { gradient: [fill_gradient[0], fill_gradient[1]] };
        }
        if (typeof jQuery.fn.circleProgress == "function") {
            var digit = circle_box.data("digit");
            var before = circle_box.data("before");
            var after = circle_box.data("after");
            var digit = Number(digit);
            var short_digit = digit / 100;
            var size_val = circle_box.data("size");
            jQuery(".ttm-circle", circle_box)
                .circleProgress({ value: 0, duration: 8000, size: size_val, startAngle: startangle_val, 
                    thickness: thickness_val, linecap:linecap_val, emptyFill: emptyFill_val, fill: fill_val })
                .on("circle-animation-progress", function (event, progress, stepValue) {
                    
                    circle_box.find(".ttm-fid-number").html(before + Math.round(stepValue * 100) + after);
                });
        }
        circle_box.waypoint(
            function (direction) {

                if (!circle_box.hasClass("completed")) {
                    if (typeof jQuery.fn.circleProgress == "function") {
                        jQuery(".ttm-circle", circle_box).circleProgress({ value: short_digit });
                    }
                    circle_box.addClass("completed");
                }
            },
            { offset: "90%" }
        );
    });

   
/*------------------------------------------------------------------------------*/
/* Skillbar
/*------------------------------------------------------------------------------*/
    
    $('.ttm-progress-bar').each(function() {
        $(this).find('.progress-bar').width(0);
    });

    $('.ttm-progress-bar').each(function() {

        $(this).find('.progress-bar').animate({
            width: $(this).attr('data-percent')
        }, 2000);
    });


    // Part of the code responsible for loading percentages:

    $('.progress-bar-percent[data-percentage]').each(function () {

        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));

            $({countNum: 0}).animate({countNum: percentage}, {
                duration: 2000,
                easing:'linear',
                step: function() {
                // What todo on every count
                    var pct = '';
                    if(percentage == 0){
                        pct = Math.floor(this.countNum) + '%';
                    }else{
                        pct = Math.floor(this.countNum+1) + '%';
                    }
                    progress.text(pct);
                }
            });
    });

/*------------------------------------------------------------------------------*/
/* Tab
/*------------------------------------------------------------------------------*/ 
    $(document).ready(function() {

        $('.ttm-tabs > .tabs').children('li').on('click', function(e) {  

            var tab = $(this).closest('.ttm-tabs > .tabs > .tab'), 

            index = $(this).closest('.ttm-tabs > .tabs > li').index();

            $(this).parents('.ttm-tabs').children(' .tabs').children('li.active ').removeClass('active'); 

            $(this).addClass('active'); 
            $(this).addClass('active').parents('.ttm-tabs').children('.content-tab').find('.content-inner').not('.content-inner:eq(' + index + ')').slideUp();
            $(this).addClass('active').parents('.ttm-tabs').children('.content-tab').find('.content-inner:eq(' + index + ')').slideDown();

            e.preventDefault();
        });
    });


    // $(document).ready(function() {
    //     $(function() {
    //         $("#menus li").click(function() {
    //           $("#menus li").removeClass("menu-active");
    //           $(this).addClass("menu-active");
    //         });
          
    //       });
    // });


/*------------------------------------------------------------------------------*/
/* Accordion
/*------------------------------------------------------------------------------*/

    var allPanels = $('.accordion > .toggle').children('.toggle-content').hide();

    $('.toggle-title').on('click',function(e) {

        e.preventDefault();
        var $this = $(this);
            $this.parent().parent().find('.toggle .toggle-title a').removeClass('active');

        if ($this.next().hasClass('show')) {

            $this.next().removeClass('show');   
            $this.next().slideUp('easeInExpo');

        } else {
            $this.parent().parent().find('.toggle .toggle-content').removeClass('show');
            $this.parent().parent().find('.toggle .toggle-content').slideUp('easeInExpo');
            $this.next().toggleClass('show');
            $this.next().removeClass('show');
            $this.next().slideToggle('easeInExpo');
           $this.next().parent().children().children().addClass('active');

        }

    });


/*------------------------------------------------------------------------------*/
/* Isotope
/*------------------------------------------------------------------------------*/

   $(function () {

        if ( $().isotope ) {           
            var $container = $('.isotope-project');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.project_item',
                    transitionDuration: '1s',
                    layoutMode: 'fitRows'
                });
            });

            $('.portfolio-filter li').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });
        };

   });


    
/*------------------------------------------------------------------------------*/
/* Prettyphoto
/*------------------------------------------------------------------------------*/
    $(function () {

         // Normal link
        jQuery('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
            if( jQuery(this).attr('target')!='_blank' && !jQuery(this).hasClass('prettyphoto') && !jQuery(this).hasClass('modula-lightbox') ){
                var attr = $(this).attr('data-gal');
                if (typeof attr !== typeof undefined && attr !== false && attr!='prettyPhoto' ) {
                    jQuery(this).attr('data-rel','prettyPhoto');
                }
            }
        });     

        jQuery('a[data-gal^="prettyPhoto"]').prettyPhoto();
        jQuery('a.ttm_prettyphoto').prettyPhoto();
        jQuery('a[data-gal^="prettyPhoto"]').prettyPhoto();
        jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'})

    });


    $(document).ready(function() {
    var e = '<div class="ttm_floting_customsett">'+
                '<a href="#" id="additional-quote-icon" data-toggle="modal" data-target="#modalContactForm" class="tmtheme_fbar_icons"><i class="fa fa-quote-left"></i><span>Get a Quote</span></a>'+
                '<a href="https://wa.me/9790924754" class="tmtheme_fbar_icons"><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a>'+
                '<a href="https://tel/9790924754" class="tmtheme_fbar_icons"><i class="fa fa-phone"></i><span>Call</span></a>'+
                '<div class="clearfix"></div>'+

                `<div class="modal fade form-bg" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Get a Estimation Enquiry</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
    
                    <form id="enquiry">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                              <i class="fa fa-user prefix grey-text"></i>
                              <label data-error="wrong" data-success="right" for="form34">Your name</label>
                              <input type="text" id="name" name="name" class="form-control validate" autocomplete="off" required />
                            </div>
    
                            <div class="md-form mb-5">
                              <i class="fa fa-envelope prefix grey-text"></i>
                              <label data-error="wrong" data-success="right" for="form29">Your email</label>
                              <input type="email" id="email" name="email" class="form-control validate" autocomplete="off" required />
                            </div>
    
                            <div class="md-form mb-5">
                              <i class="fa fa-phone prefix grey-text"></i>
                              <label data-error="wrong" data-success="right" for="form32">Mobile</label>
                              <input type="text" id="phone" name="phone" class="form-control validate" autocomplete="off" required />
    
                            </div>

                            <div class="md-form mb-5">
                              <i class="fa fa-pencil prefix grey-text"></i>
                              <label data-error="wrong" data-success="right" for="form8">Your message</label>
                              <textarea type="text" id="msg" name="msg" class="md-textarea form-control" rows="3" autocomplete="off" required></textarea>
                            </div>
                            
                            <div class="md-form" style="display:flex;justify-content: space-between;">
                                <div class="g-recaptcha mb-3 mt-3" data-sitekey="6LejJPklAAAAAOYtij_6wy9dAtlZf4wBxNXooYO4"></div>
                                <button type="submit" name="submit" class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                            </div>
                            <div class="md-form">
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>`+
            '</div>';

    $('body').append(e);
}); 

    
/*------------------------------------------------------------------------------*/
/* share-icon_btn
/*------------------------------------------------------------------------------*/
    jQuery(".ttm-blog-classic").each(function(t){
        var e=jQuery(this);
        e.find(".ttm-social-share-icon_btn").on("click",function(){
            return e.find(".social-icons").toggleClass("show"),!1
        })
    });

/*------------------------------------------------------------------------------*/
/* twentytwenty[data-orientation]
/*------------------------------------------------------------------------------*/

$(function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });


/*------------------------------------------------------------------------------*/
/* Slick_slider
/*------------------------------------------------------------------------------*/
    $(".slick_slider").slick({
        speed: 1000,
        infinite: true,
        arrows: false,
        dots: false,                   
        autoplay: false,
        centerMode : false,

        responsive: [{

            breakpoint: 1360,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {

            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {

            breakpoint: 680,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });




/*------------------------------------------------------------------------------*/
/* Back to top
/*------------------------------------------------------------------------------*/
     
    // ===== Scroll to Top ==== 
    jQuery('#totop').hide();

    $(window).on("scroll",function(){
        if (jQuery(this).scrollTop() >= 500) {        // If page is scrolled more than 50px
            jQuery('#totop').fadeIn(200);    // Fade in the arrow
            jQuery('#totop').addClass('top-visible');
        } else {
            jQuery('#totop').fadeOut(200);   // Else fade out the arrow
            jQuery('#totop').removeClass('top-visible');
        }
    });

    jQuery('#totop').on("click",function() {      // When arrow is clicked
        jQuery('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
        return false;
    });

});


 jQuery(document).ready(function() {
    jQuery('.tm_coverimgbox_wrapper').each(function(){
        var parentDiv = jQuery(this);
                
                parentDiv.children('.tm_coverbox_contents').hover(function () {
                    parentDiv.find('.tm_coverbox_img').removeClass('active');
                    jQuery(this).next('.tm_coverbox_img').addClass('active');
                });
    });
 });


//  ---------------- Form Validation ---------------

// ------------ Enquirey Form ------------- 

if ($("#enquiry").length) {
    $("#enquiry").validate({
        rules:{
            name:false,
            email:{
                email:true
            },
            phone:{
                number:true,
                minlength: 10,
                maxlength: 10
            },
            msg:false
        },
        messages: {
            name:{
                required: "Enter Your Full Name",
            },
            email:"Please Enter Your Mail",
            phone:"Enter Your correct Mobile Number",
            sub:"Enter Your Subject",
            msg:"This Feild is Required"
          },

        submitHandler: function (form) {
            
            $.ajax({
                type: "POST",
                url: "PHP_Mail/submit.php",
                data: $('#enquiry').serialize(),
                success: function () {
                    window.location = "https://www.mekarkprefab.com";
                    window.location.reload(true);
                }
            });
            return false; 
        }

    });
}

// ------------ Blog Enquirey Form ------------- 

if ($("#blog").length) {
    $("#blog").validate({
        rules:{
            name:false,
            email:{
                email:true
            },
            phone:{
                number:true,
                minlength: 10,
                maxlength: 10
            },
            msg:false
        },
        messages: {
            name:{
                required: "Enter Your Full Name",
            },
            email:"Please Enter Your Mail",
            phone:"Enter Your correct Mobile Number",
            sub:"Enter Your Subject",
            msg:"This Feild is Required"
          },

        submitHandler: function (form) {
            
            $.ajax({
                type: "POST",
                url: "PHP_Mail/submit.php",
                data: $('#enquiry').serialize(),
                success: function () {
                    window.location = "https://www.mekarkprefab.com";
                    window.location.reload(true);
                }
            });
            return false; 
        }

    });
}

// ----------- Text Box Hide ------------- 
$(document).ready(function () {
    $("#role").change(function () {
    var value = $("#role option:selected").text();
    if(value == "Other"){
        $("#others").css("display","block");
    }
    else{
        $("#others").css("display","none");
    }
    });
});

/*------------------------------------------
    = CONTACT FORM SUBMISSION
-------------------------------------------*/
if ($("#contact_form").length) {
    $("#contact_form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: "required",
            phone: "required",
            
            msg: {
                required: true
            },
            crole: "required",
            resume: "required"
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter your email address",
            phone: "Please enter your phone number",
            msg: "Please select your Message",
            crole: "Please enter Your Designation",
            resume: "Upload Your Resume"
        },
        submitHandler: function(form) {
            form.submit();
          }
    });
}

/*------------------------------------------
    = Page FORM SUBMISSION
-------------------------------------------*/
if ($("#page_form").length) {
    $("#page_form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: "required",
            phone: "required",
            
            msg: {
                required: true
            }
        },
        messages: {
            name: "Please enter your name",
            phone: "Please enter your phone number",
            email: "Please enter your email address",
            msg: "Please Enter Your Message",
        },
        submitHandler: function(form) {
            form.submit();
          }
    });
}