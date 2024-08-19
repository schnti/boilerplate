// Bootstrap
// import bootstrap from 'bootstrap'
// import 'bootstrap/js/dist/alert';
// import 'bootstrap/js/dist/button';
// import 'bootstrap/js/dist/carousel';
import 'bootstrap/js/dist/collapse'; //navbar
// import 'bootstrap/js/dist/dropdown';
// import 'bootstrap/js/dist/modal';
// import 'bootstrap/js/dist/popover';
// import 'bootstrap/js/dist/scrollspy';
// import 'bootstrap/js/dist/tab';
// import 'bootstrap/js/dist/toast';
// import 'bootstrap/js/dist/tooltip';

// onepager hide navbarn-nav after link klick
const navLinks = document.querySelectorAll('.nav-item:not(.dropdown)');
const menuToggle = document.getElementById('navbarn-nav');
navLinks.forEach(function (l) {
    l.addEventListener('click', function () {
        if (menuToggle.classList.contains('show')) { // avoid flickering on desktop
            menuToggle.classList.remove('show');
        }
    });
});

// // Photoswipe
// import PhotoSwipeLightbox from 'photoswipe/dist/photoswipe-lightbox.esm.js';
// import PhotoSwipe from 'photoswipe/dist/photoswipe.esm.js';

// const lightbox = new PhotoSwipeLightbox({
//     gallery: '.photoswipe',
//     children: 'a',
//     showHideAnimationType: 'none',
//     zoomAnimationDuration: false,
//     bgOpacity: 1,
//     loop: false,
//     pswpModule: PhotoSwipe,
// });
// lightbox.init();


// // Navbar resize on scrolling
// window.onscroll = function () { scrollFunction() };
// function scrollFunction() {
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//         document.getElementById("navbar").classList.add('scrolled');
//     } else {
//         document.getElementById("navbar").classList.remove('scrolled');
//     }
// }