// Search
$(".search-icon").click(function() {
    $(".box-search-show").addClass("open");
});
$(".close").click(function() {
    $(".box-search-show").removeClass("open");
});
// Menu-bar-mobie
$(".menu-bar-lv-1").each(function(){
    $(this).find(".span-lv-1").click(function(){
        $(this).toggleClass('rotate-menu');
        $(this).parent().find(".menu-bar-lv-2").toggle(500);
    });
});
$(".menu-bar-lv-2").each(function(){
    $(this).find(".span-lv-2").click(function(){
        $(this).toggleClass('rotate-menu');
        $(this).parent().find(".menu-bar-lv-3").toggle(500);
    });
});
$(".shadow-open-menu").click(function() {
    $('.menu-bar-mobile').fadeOut();
    $(".shadow-open-menu").fadeOut();
    $(".iconmenu_").toggleClass("open");
    $(".hide-mobile-check").removeClass('show');
});
$(".iconmenu_").click(function() {
    $(this).toggleClass("open");
    $('.menu-bar-mobile').fadeToggle(500);
    $(".shadow-open-menu").fadeToggle(500);
});
//fiilter

$('.best-sale .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.best-sale .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.product-new .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.product-new .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.foods .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.foods .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.product-baby .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.product-baby .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.product-makeup .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.product-makeup .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.houseware .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.houseware .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$('.health .nav-fiilter ul li').each(function(){
    $(this).click(function(){
        $('.health .nav-fiilter ul li').removeClass('active');
        $(this).addClass('active');
    })
});
$(".list-sp-left ul li").hover(function(){
    $('.list-sp-left ul li').removeClass('active');
    $(this).addClass('active');
})
$('.btn-review').click(function(){
    $(".form-review").toggleClass('active')
})
$(".pagination ul li").hover(function(){
    $(".pagination ul li").removeClass('active');
    $(this).addClass('active');
});
$(".list-km ul li").hover(function(){
    $(".list-km ul li").removeClass('active');
    $(this).addClass('active');
})

$(".ebay-top").click(function(){
 $('html, body').animate({
    scrollTop: 0,
}, 500);
 return false;
});

$('.slider_main .item-slider').click(function() {

 var getTabId = $(this).attr('id');
 $('.box-detail-giaidoan').removeClass('active');
 $('.info-gd-' + getTabId).toggleClass('active');
    // test();
});
// login
$('.btn-login').click(function(){
   $('.popup-style-login').addClass('active');
})
$(".btn-close, .shadow-popup").click(function() {
    $('.popup-style-login').removeClass('active');
});

$(".btn-close, .shadow-popup").click(function() {
    $('.popup-style-orderss').removeClass('active');
});
$(".btn-close, .shadow-popup").click(function() {
    $('.popup-style-forgot-pass').removeClass('active');
});

$(".rigister").click(function(){
    $('.form-login').removeClass('active');
    $('.form-register').addClass('active')
    $(this).addClass('active');
    $('.login').removeClass('active');
});
$('.rigister').hover(function(){
    $(this).addClass('active');
    $('.login').removeClass('active');
})

$(".login").click(function(){
    $('.form-login').addClass('active');
    $('.form-register').removeClass('active')
    $(this).addClass('active');
    $('.rigister').removeClass('active');
});
$('.login').hover(function(){
    $(this).addClass('active');
    $('.rigister').removeClass('active');
})
//count in detail-product
$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});
// slider

$('.list-product-care').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: true,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 4,
        }
    },
    {
        breakpoint: 993,
        settings: {
            slidesToShow: 3,
        }
    },

    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 374,
        settings: {
            slidesToShow: 1,  
        }
    }
    ]
});
$('.list-product-same').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: true,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 4,
        }
    },
    {
        breakpoint: 993,
        settings: {
            slidesToShow: 3,
        }
    },

    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 374,
        settings: {
            slidesToShow: 1,  
        }
    }
    ]
});
$('.list-product-inhome').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: true,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 3,
        }
    },
    {
        breakpoint: 993,
        settings: {
            slidesToShow: 2,
        }
    },

    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
        }
    },
    {
        breakpoint: 374,
        settings: {
            slidesToShow: 1,  
        }
    }
    ]
});
$('.list-partner').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 5,
        }
    },
    {
        breakpoint: 993,
        settings: {
            slidesToShow: 4,
        }
    },

    {
        breakpoint: 768,
        settings: {
            slidesToShow: 3,
        }
    },
    ]
});
$('.left_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
});

$('.list-new').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 3,
            arrows: false   
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            arrows: false

        }
    },
    {
        breakpoint: 475,
        settings: {
            slidesToShow: 1,
            arrows: false   
        }
    }
    ]
});
$('.tag-news ul').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 4,
            arrows: false

        }
    },
    {
        breakpoint: 475,
        settings: {
            slidesToShow: 3,
            arrows: false   
        }
    }
    ]
});
$('.list-product-same').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 3,
            arrows: false   
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            arrows: false

        }
    },
    {
        breakpoint: 475,
        settings: {
            slidesToShow: 1,
            arrows: false   
        }
    }
    ]
});
$('.list-km ul').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 3,
            arrows: false   
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            arrows: false

        }
    },
    {
        breakpoint: 475,
        settings: {
            slidesToShow: 2,
            arrows: false   
        }
    }
    ]
});
$('.list-blog ul').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    responsive: [
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 3,
            arrows: false   
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            arrows: false

        }
    },
    {
        breakpoint: 475,
        settings: {
            slidesToShow: 2,
            arrows: false   
        }
    }
    ]
});