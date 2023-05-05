(function($){"use strict";$(window).on("load",function(){megamenu();bigSlider();bigPageLoader();full_height();bigCarousel();bigStickyHeader();bigAccordion();bigToggle();bigProgresbar();bigLocalScroll();bigLightbox();bigTextRotator();fullscreen_nav();});var pageSection=$("div, section, li");pageSection.each(function(indx){if($(this).attr("data-bg")){$(this).css("background-image","url("+$(this).data("bg")+")");}});})(jQuery);function bigAccordion(){(function($){"use strict";var allPanels=$(".accordion > dd").hide();allPanels.first().slideDown("easeOutExpo");$(".accordion > dt > a").first().addClass("active");$(".accordion > dt > a").on("click",function(){var current=$(this).parent().next("dd");$(".accordion > dt > a").removeClass("active");$(this).addClass("active");allPanels.not(current).slideUp("easeInExpo");$(this).parent().next().slideDown("easeOutExpo");return false;});})(jQuery);}function bigToggle(){(function($){"use strict";var allToggles=$(".toggle > dd").hide();$(".toggle > dt > a").on("click",function(){if($(this).hasClass("active")){$(this).parent().next().slideUp("easeOutExpo");$(this).removeClass("active");}else{var current=$(this).parent().next("dd");$(this).addClass("active");$(this).parent().next().slideDown("easeOutExpo");}return false;});$('.navbar-nav').slicknav({label:'<i class="ion-navicon ion-lg"></i>',duration:1000,easingOpen:"easeOutBounce",appendTo:'.logo, .logo-light, .logo-left, .shop-center-menu, .center-menu'});})(jQuery);}function bigProgresbar(){(function($){"use strict";var progressBar=$(".progress-bar");progressBar.each(function(indx){$(this).css("width",$(this).attr("aria-valuenow")+"%");});$('.list-group-item').on('click',function(e){var previous=$(this).closest(".list-group").children(".active");previous.removeClass('active');$(e.target).addClass('active');});})(jQuery);}function bigLocalScroll(){(function($){"use strict";$(".local-scroll").localScroll({target:"body",duration:1500,offset:0,easing:"easeInOutExpo"});})(jQuery);}function bigLightbox(){(function($){"use strict";$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});})(jQuery);}function bigTextRotator(){(function($){"use strict";$(".text-rotating-flip").Morphext({animation:"flipInY",speed:1500});$(".text-rotating-fade").Morphext({animation:"fadeInDown",speed:2500});$(".text-rotating-bounce").Morphext({animation:"bounceInDown",speed:3000});$(".text-rotating-rotate").Morphext({animation:"rotateInDownLeft",speed:4000});$(".text-rotating-zoom").Morphext({animation:"zoomInDown",speed:3500});})(jQuery);}function bigCarousel(){(function($){"use strict";$(".owl-carousel").owlCarousel({loop:true,margin:10,nav:true,responsiveClass:true,dots:true,items:1,});$('.brands').owlCarousel({loop:true,margin:10,nav:true,responsive:{0:{items:2},700:{items:4},1170:{items:6}}});$('.screenshot').owlCarousel({loop:true,margin:10,nav:true,responsive:{0:{items:1},700:{items:2},1170:{items:4}}});$('.products').owlCarousel({loop:true,margin:10,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],nav:true,responsive:{0:{items:1},700:{items:2},1170:{items:4}}});$(".news-slider").owlCarousel({loop:true,margin:10,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],nav:true,responsive:{0:{items:1},700:{items:2},1170:{items:3}}});$(".owl-prev").html('');$(".owl-next").html('');$(".portfolio-img").magnificPopup({gallery:{enabled:true}});$(".award-img").magnificPopup({gallery:{enabled:true}});})(jQuery);}function bigSlider(){(function($){"use strict";$('.flexslider').flexslider({animation:"fade",controlNav:false});})(jQuery);}function bigPageLoader(){(function($){"use strict";$(".loader").fadeOut("slow");})(jQuery);}function bigStickyHeader(){(function($){"use strict";$(".header").sticky({topSpacing:0});})(jQuery);}function full_height(){(function($){$(".full-height").height($(window).height());$(window).scroll(function(){if($(window).scrollTop()>100){$(".header-transparent").removeClass("transparent");$(".header-transparent").addClass("header-bg");}else{$(".header-transparent").addClass("transparent");$(".header-transparent").removeClass("header-bg");}});})(jQuery);}function fullscreen_nav(){(function($){$(".fullscreen-btn a").on('click',function(){$(".fullscreen-overlay").fadeToggle(200);$(this).toggleClass('btn-open').toggleClass('btn-close');$(".fullscreen-overlay").width($(window).width());});$('.fullscreen-overlay').on('click',function(){$(".fullscreen-overlay").fadeToggle(200);$(".fullscreen-btn a").toggleClass('btn-open').toggleClass('btn-close');$(".fullscreen-overlay").width($(window).width());open=false;});})(jQuery);}function megamenu(){$(".dropdown").hover(function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideDown("400");$(this).toggleClass('open');},function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideUp("400");$(this).toggleClass('open');});}

//Owl Carousel
function bigCarousel() {
    (function($) {
        "use strict";
        $(".owl-carousel").owlCarousel({

            loop: true,
            margin: 10,
            nav: true,
            responsiveClass: true,
            dots: true,
            items: 1,

        });
        $('.brands').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                700: {
                    items: 4
                },
                1170: {
                    items: 6
                }
            }
        });
        $('.screenshot').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1170: {
                    items: 4
                }
            }
        });
        $('.products').owlCarousel({
            loop: true,
            margin: 10,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1170: {
                    items: 4
                }
            }
        });
        $(".news-slider").owlCarousel({
            loop: true,
            margin: 10,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
		$(".team-slider").owlCarousel({
            loop: true,
            margin: 20,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });

        $(".owl-prev").html('');
        $(".owl-next").html('');

        // Works Item Lightbox  
        $(".portfolio-img").magnificPopup({
            gallery: {
                enabled: true
            }
        });
        $(".award-img").magnificPopup({
            gallery: {
                enabled: true
            }
        });

    })(jQuery);
}