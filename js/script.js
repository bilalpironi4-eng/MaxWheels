/* =========================================================
   MENU
========================================================= */

const menuBtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.navbar');

if (menuBtn && navbar) {

    menuBtn.addEventListener('click', () => {

        navbar.classList.toggle('active');
        menuBtn.classList.toggle('fa-times');

    });

}


/* =========================================================
   CLOSE MENU AFTER NAV LINK CLICK
========================================================= */

document.querySelectorAll('.navbar a').forEach(link => {

    link.addEventListener('click', () => {

        if (navbar) {
            navbar.classList.remove('active');
        }

        if (menuBtn) {
            menuBtn.classList.remove('fa-times');
        }

    });

});


/* =========================================================
   CLOSE MENU OUTSIDE
========================================================= */

document.addEventListener('click', (event) => {

    if (
        navbar &&
        menuBtn &&
        !navbar.contains(event.target) &&
        !menuBtn.contains(event.target)
    ) {

        navbar.classList.remove('active');
        menuBtn.classList.remove('fa-times');

    }

});


/* =========================================================
   SERVICES ACTIVE CARD
========================================================= */

const serviceBoxes = document.querySelectorAll(
    '.services .box-container .box'
);

serviceBoxes.forEach(box => {

    box.addEventListener('click', () => {

        serviceBoxes.forEach(item => {
            item.classList.remove('active');
        });

        box.classList.add('active');

    });

});


/* =========================================================
   VEHICLES SLIDER
========================================================= */

const vehiclesSlider = document.querySelector('.vehicles-slider');

if (vehiclesSlider) {

    new Swiper('.vehicles-slider', {

        loop: true,

        spaceBetween: 20,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },

        pagination: {
            el: '.vehicles-slider .swiper-pagination',
            clickable: true
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 2
            },

            1024: {
                slidesPerView: 3
            }

        }

    });

}


/* =========================================================
   FEATURED CARS SLIDER
========================================================= */

const featuredSlider = document.querySelector('.featured-slider');

if (featuredSlider) {

    new Swiper('.featured-slider', {

        loop: true,

        spaceBetween: 20,

        autoplay: {
            delay: 3500,
            disableOnInteraction: false
        },

        pagination: {
            el: '.featured-slider .swiper-pagination',
            clickable: true
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 2
            },

            1024: {
                slidesPerView: 3
            }

        }

    });

}


/* =========================================================
   REVIEWS SLIDER
========================================================= */

const reviewsSlider = document.querySelector('.reviews-slider');

if (reviewsSlider) {

    new Swiper('.reviews-slider', {

        loop: true,

        spaceBetween: 20,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },

        pagination: {
            el: '.reviews-slider .swiper-pagination',
            clickable: true
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 2
            },

            1024: {
                slidesPerView: 3
            }

        }

    });

}


/* =========================================================
   ESC KEY
========================================================= */

document.addEventListener('keydown', (event) => {

    if (event.key === 'Escape') {

        if (navbar) {
            navbar.classList.remove('active');
        }

        if (menuBtn) {
            menuBtn.classList.remove('fa-times');
        }

    }

});