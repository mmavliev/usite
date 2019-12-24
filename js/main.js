 AOS.init({
     duration: 800,
     easing: 'slide',
     once: true
 });

 jQuery(document).ready(function($) {
     $(".modal-body").slick({
         dots: true,
         infinite: true,
         arrows: false,
     });

     function openModal() {
         $("#modalSettings").modal("show")
         $("#modalSettings").css("opacity", "0.01");
         $(".modal-body").slick('slickGoTo', 0);
         setTimeout(function() {
             $("#modalSettings").css("opacity", "1");
         }, 500);
         $.cookie("wasOpened", true, { expires: 60 * 60 * 60 * 24 * 1000 });
     }
     $("#customize-btn").click(function() {
         openModal();
     })
     $("#next").click(function() {
         $(".modal-body").slick('slickNext');
     })
     $("#back").click(function() {
         $(".modal-body").slick('slickPrev');
     })
     var siteMenuClone = function() {

         $('.js-clone-nav').each(function() {
             var $this = $(this);
             $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
         });


         setTimeout(function() {

             var counter = 0;
             $('.site-mobile-menu .has-children').each(function() {
                 var $this = $(this);

                 $this.prepend('<span class="arrow-collapse collapsed">');

                 $this.find('.arrow-collapse').attr({
                     'data-toggle': 'collapse',
                     'data-target': '#collapseItem' + counter,
                 });

                 $this.find('> ul').attr({
                     'class': 'collapse',
                     'id': 'collapseItem' + counter,
                 });

                 counter++;

             });

         }, 1000);

         $('body').on('click', '.arrow-collapse', function(e) {
             var $this = $(this);
             if ($this.closest('li').find('.collapse').hasClass('show')) {
                 $this.removeClass('active');
             } else {
                 $this.addClass('active');
             }
             e.preventDefault();

         });

         $(window).resize(function() {
             var $this = $(this),
                 w = $this.width();

             if (w > 768) {
                 if ($('body').hasClass('offcanvas-menu')) {
                     $('body').removeClass('offcanvas-menu');
                 }
             }
         })

         $('body').on('click', '.js-menu-toggle', function(e) {
             var $this = $(this);
             e.preventDefault();

             if ($('body').hasClass('offcanvas-menu')) {
                 $('body').removeClass('offcanvas-menu');
                 $this.removeClass('active');
             } else {
                 $('body').addClass('offcanvas-menu');
                 $this.addClass('active');
             }
         })

         // click outisde offcanvas
         $(document).mouseup(function(e) {
             var container = $(".site-mobile-menu");
             if (!container.is(e.target) && container.has(e.target).length === 0) {
                 if ($('body').hasClass('offcanvas-menu')) {
                     $('body').removeClass('offcanvas-menu');
                 }
             }
         });
     };
     siteMenuClone();

     var OnePageNavigation = function() {
         var navToggler = $('.site-menu-toggle');
         $("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .feature a[href^='#'],.site-mobile-menu .site-nav-wrap li a", function(e) {
             e.preventDefault();

             var hash = this.hash;

             $('html, body').animate({
                 'scrollTop': $(hash).offset().top
             }, 600, 'easeInOutCirc', function() {
                 window.location.hash = hash;
             });

         });
     };
     OnePageNavigation();

     var siteScroll = function() {



         $(window).scroll(function() {

             var st = $(this).scrollTop();

             if (st > 100) {
                 $('.js-sticky-header').addClass('shrink');
             } else {
                 $('.js-sticky-header').removeClass('shrink');
             }

         })

     };
     siteScroll();


     var sitePlusMinus = function() {
         $('.js-btn-minus').on('click', function(e) {
             e.preventDefault();
             if ($(this).closest('.input-group').find('.form-control').val() != 0) {
                 $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
             } else {
                 $(this).closest('.input-group').find('.form-control').val(parseInt(0));
             }
         });
         $('.js-btn-plus').on('click', function(e) {
             e.preventDefault();
             $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
         });
     };
     sitePlusMinus();

     var siteSticky = function() {
         $(".js-sticky-header").sticky({ topSpacing: 0 });
     };
     siteSticky();

     // navigation

     var siteScroll = function() {



         $(window).scroll(function() {

             var st = $(this).scrollTop();

             if (st > 100) {
                 $('.js-sticky-header').addClass('shrink');
             } else {
                 $('.js-sticky-header').removeClass('shrink');
             }

         })

     };
     siteScroll();

     function a1() {
         $("#color-sheme-div").delay(2000).animate({
             backgroundColor: "#000000"
         }, 2000);
         $("#color-sheme-heading").delay(2000).animate({
             color: "#ffffff"
         }, 2000);
     }


     function a2() {
         $("#color-sheme-div").delay(2000).animate({
             backgroundColor: "#685E9E"
         }, 2000);
         $(".color-sheme-text").delay(6000).animate({
             color: "#000000"
         }, 2000);
     }

     function a3() {
         $("#color-sheme-div").delay(2000).animate({
             backgroundColor: "#A82F2F"
         }, 2000);
         $(".color-sheme-text").delay(2000).animate({
             color: "#fffffff"
         }, 2000);
     }

     function an() {
         a1();
         a2();
         a3();
     }
     for (i = 0; i < 10; i++) {
         an();
     }

     /*//////////////////////////////////////////////////////BUTTONS/////////////////////////////////////////////////////////////////*/

     var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
     if (isTouch) {
         $("#button-choose").hide();
         $(".button-choose").hide();
         $(".drag-on").hide();
         $(".resize-on").hide();
         $("#phone-warning").show();
         $("#div3").hide();
         $("#customize-btn").click(function() {
             $(".fa-times").click();
             openModal();
         })
     }
     $(function() {
         if (!$.cookie('hideModal')) {
             setTimeout("document.querySelector('.bottom__cookie-block').style.display='inline-block'", 1000);
         }
         $.cookie('hideModal', true, {
             expires: 30,
             path: '/'
         });
     });

     $('.ok').click(function() {
         $('.bottom__cookie-block').hide();
     });
     /*////////////////////CLOCKS/////////////////*/
     var dialLines = document.getElementsByClassName('diallines');

     for (var i = 1; i < 60; i++) {
         dialLines[i] = $(dialLines[i - 1]).clone()
             .insertAfter($(dialLines[i - 1]));
         $(dialLines[i]).css('transform', 'rotate(' + 6 * i + 'deg)');
     }

     function tick() {
         var date = new Date();
         var seconds = date.getSeconds();
         var minutes = date.getMinutes();
         var hours = date.getHours();
         var day = date.getDate();

         var secAngle = seconds * 6;
         var minAngle = minutes * 6 + seconds * (360 / 3600);
         var hourAngle = hours * 30 + minutes * (360 / 720);

         $('.sec-hand').css('transform', 'rotate(' + secAngle + 'deg)');
         $('.min-hand').css('transform', 'rotate(' + minAngle + 'deg)');
         $('.hour-hand').css('transform', 'rotate(' + hourAngle + 'deg)');
         $('.date').text(day);
     }

     setInterval(tick, 100);

 });