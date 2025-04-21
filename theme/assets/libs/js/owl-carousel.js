$ = jQuery;
$(document).ready(function () {
    $('.js-owl-slider-4').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50
            },
            480: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.owl-4').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50
            },
            480: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.js-owl-slider-4').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50
            },
            480: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.owl-2').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    /*
     * Component: Có thể bạn sẽ thích
     *
     * added by hiennguyenduy (hiennd@ancu.com) at 2022-03-29
     */
    $('.owl-tour-similar, .owl-vnb-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 15,
                stagePadding: 30,
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
            }
        }
    });

    $('.owl-partners').owlCarousel({
        loop: true,
        margin: 8,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 2,                    
            },
            600: {
                items: 3
            },
            1000: {
                items: 5,
            }
        }
    })
});