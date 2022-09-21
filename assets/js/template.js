$(document).ready(function () {


        
        // product
        $('.product-home-owl').owlCarousel({
            loop:false,
            margin:30,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })

        // category
        $('.category-owl').owlCarousel({
            loop:false,
            margin:30,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })

        // prodct details slider active
        /*  $('.product-large-slider').slick({
            fade: true,
            arrows: false,
            speed: 1000,
            asNavFor: '.pro-nav'
        });


        // product details slider nav active
      
        $('.pro-nav').slick({
            slidesToShow: 4,
            asNavFor: '.product-large-slider',
            centerMode: true,
            speed: 1000,
            centerPadding: 0,
            focusOnSelect: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
            responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 3,
                    }
                }]
        }); */

        /* ----------------------------------------------------------- */
        /*  fancybox
        /* ----------------------------------------------------------- 
        $('[data-fancybox="gallery"]').fancybox({});

*/
        // product-sidebar

        $(".product-category .custom").click(function () {
            //slide up all the link lists
            $(".product-category ul ul").slideUp();
            $('.plus',this).html('+');
            //slide down the link list below the h3 clicked - only if its closed
            if (!$(this).next().is(":visible")) {
                $(this).next().slideDown();
                //$(this).remove("span").append('<span class="minus">-</span>');
                $('.plus').html('+');
                $('.plus',this).html('-');
            }
        })


    
});