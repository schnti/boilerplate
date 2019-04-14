/// here is where the dragon lives
$(document).ready(function () {
// nav-tabs-responsive
//    $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function (e) {
//        console.log('on: show.bs.tab');
//        var $target = $(e.target);
//        var $tabs = $target.closest('.nav-tabs-responsive');
//        var $current = $target.closest('li');
//        var $parent = $current.closest('li.dropdown');
//        $current = $parent.length > 0 ? $parent : $current;
//        var $next = $current.next();
//        var $prev = $current.prev();
//        var updateDropdownMenu = function ($el, position) {
//            $el
//                .find('.dropdown-menu')
//                .removeClass('pull-xs-left pull-xs-center pull-xs-right')
//                .addClass('pull-xs-' + position);
//        };
//
//        $tabs.find('>li').removeClass('next prev');
//        $prev.addClass('prev');
//        $next.addClass('next');
//
//        updateDropdownMenu($prev, 'left');
//        updateDropdownMenu($current, 'center');
//        updateDropdownMenu($next, 'right');
//    });

// navbar submenü nicht schließen beim click auf einen menüpunkt
//     $(document).on('click', '.navbar-nav .dropdown-menu', function (e) {
//         e.stopPropagation();
//     });

// carousel swipe
//    $(".carousel").swipe({
//
//        swipe : function (event, direction, distance, duration, fingerCount, fingerData) {
//
//            if (direction === 'left')
//                $(this).carousel('next');
//            if (direction === 'right')
//                $(this).carousel('prev');
//
//        },
//        allowPageScroll : "vertical"
//
//    });


// navbar-fixed-top
//     $(document).scroll(function (e) {
//         var scrollTop = $(document).scrollTop();
//         if (scrollTop > 45) {
//             // debug
//             // console.log(scrollTop);
//             $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
//         } else {
//             $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
//         }
//     });

});