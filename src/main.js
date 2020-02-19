// require('../node_modules/jquery/src/jquery');

var $ = require("jquery");
window.jQuery = $; //  <-- This is what do the magic!!

// require("@fancyapps/fancybox");

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