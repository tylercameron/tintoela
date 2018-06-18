jQuery(document).ready(function ($) {
    if ($('.home-video').length) {
        console.log('video on page');
        
        $(window).scroll(function (e) {
            const offsetTop = $('.home-video').offset().top + ($('.home-video').height() * 0.25);
    
            $(".home-video").each(function () {
                const scrollPos = $(window).scrollTop();
                const y1 = $(this).offset().top - ($(window).height() * 0.2);
                const y2 = offsetTop;
                const video = $('.home-video video')[0]
    
                if (scrollPos > y1 && scrollPos < y2) {                
                    video.play();
                } else {
                    video.pause();
                }
            });
        });
    }
});