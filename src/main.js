// require('../node_modules/jquery/src/jquery');

var $ = require("jquery");
window.jQuery = $; //  <-- This is what do the magic!!

// require("@fancyapps/fancybox");

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

require('../node_modules/@fancyapps/fancybox/src/js/core');
require('../node_modules/@fancyapps/fancybox/src/js/guestures');
require('../node_modules/@fancyapps/fancybox/src/js/fullscreen');


// require('../node_modules/@fancyapps/fancybox/src/js/slideshow');
// require('../node_modules/@fancyapps/fancybox/src/js/thumbs');
// require('../node_modules/@fancyapps/fancybox/src/js/wheel');

$('[data-fancybox="gallery"]').fancybox({
    animationEffect : 'fade',
    buttons : [
        'zoom',
        //'share',
        'slideShow',
        'fullScreen',
        //'download',
        // 'thumbs',
        'close'
    ]
});