
$(window).scroll(function () {
    if ($(this).scrollTop() >= 300) {
        $('.scroll-to-top').addClass('top-arrow');
        $('.sticky-cart-icon').fadeIn();
        $('.nav-section').addClass('onscroll');
    } else {
        $('.scroll-to-top').removeClass('top-arrow');
        $('.sticky-cart-icon').fadeOut();
        $('.nav-section').removeClass('onscroll');
    }
});
$('.scroll-to-top').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 2000, 'easeInOutQuint');
});

$(window).on('load', function () {
    $('.home-slider .owl-carousel').owlCarousel({
        loop: true,
        autowidth: true,
        margin: 10,
        autoplay: true,
        mouseDrag: false,
        touchDrag: true,
        animateOut: 'fadeOut',
        items: 1,
        navText: ["<span class='fas fa-long-arrow-alt-left'></span>", "<span class='fas fa-long-arrow-alt-right'></span>"],
        onChanged: changed,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
            },
            600: {
                items: 1,
                nav: false,
                dots: true,
            },
            1000: {
                items: 1,
                nav: true,
                dots: true,
            }
        }
    });
});
function changed(event) {
    new WOW().init();
}
// aos animation
AOS.init();

// wow animate

new WOW().init();


// tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip({ delay: { "show": 500, "hide": 100 } })
});


// end counter
// Owl carousel of user review Section
$('.item-slider.owl-carousel').owlCarousel({
    items: 4,
    autoplay: true,
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: false,
    navText: ["<span class='fas fa-long-arrow-alt-left'></span>", "<span class='fas fa-long-arrow-alt-right'></span>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
});

$('#menu-bar').click(function () {
    $('.nav-wrapper').addClass('toggle');
})

$('.nav-wrapper .close').click(function () {
    $('.nav-wrapper').removeClass('toggle');
})
$(document).ready(function () {
    $('.select').niceSelect();

    $('.select').on('change', function () {
        $(this).siblings('.nice-select').find('.current').css({
            'color': 'black',
            'opacity': '1'
        });
    })

});
// Owl carousel testimonial 6th
$('.product_s.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    margin: 50,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    navText: [
        "<span class='fa fa-chevron-left'></span>",
        "<span class='fa fa-chevron-right'></span>",
    ],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        768: {
            items: 1,
        },
        1000: {
            items: 3,
        }
    }
});

const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


$(window).on("load", function () {
    var $container = $(".special-item .filterdiv");
    $container.isotope({
        filter: ".bead",
        layoutMode: "masonry",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: true,
            layoutMode: "fitRows",
        },
    });
    $(".special-item .filter ul li  a").on("click", function () {
        $(".special-item .filter .active").removeClass("active");
        $(this).parent("li").addClass("active");

        var selector = $(this).attr("data-filter");

        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                queue: true,
            },
        });

        return false;
    });
});