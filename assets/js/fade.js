jQuery(document).ready(function($) {
    var windowWidth = window.innerWidth;   

    (function(){
        var $target = $('.E-fadein'),
            animationClass = 'E-fadein-start',
            offset = $(window).height() * 3/4;
        function animeScroll(){
            var documentTop = $(document).scrollTop();
            
            $target.each(function(){
                var itemTop = $(this).offset().top;
                if(documentTop > itemTop - offset){
                    $(this).addClass(animationClass);
                }
            });
        }
        animeScroll();        
    }());
});