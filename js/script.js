(function ($) {
    $(document).ready(function () {
        var $header = $('.header-wrap'),
                $headerMain = $('.site-header');
        var stickyNavTop = $headerMain.offset().top;
        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();
            // var headerHeight = $('#primary-nav-container').height();
            if (scrollTop > stickyNavTop) {
                if ($headerMain.hasClass('sticky') !== true) {
                    $headerMain.addClass('sticky');
                }
            } else {
                $headerMain.removeClass('sticky');
            }
        };

        var menuButton = $('#cn-button'),
                menuWrapper = $('#cn-wrapper'),
                menuOverlay = $('#cn-overlay');
        var menuOpen = false;

        $('.headerform-menu-text,#cn-button').click(function (e) {
            if (!e)
                var e = window.event;
            e.stopPropagation();//so that it doesn't trigger click event on document

            if (!menuOpen) {
                openNav();
            }
            else {
                closeNav();
            }
        });
        menuWrapper.click(function (e) {
            e.stopPropagation();
        });

        function openNav() {
            menuOpen = true;
            menuButton.html("-");
            menuButton.addClass('menu-clicked');
            menuOverlay.addClass('on-overlay');
            menuWrapper.addClass('opened-nav');
        }
        function closeNav() {
            menuOpen = false;
            menuButton.html("+");
            menuButton.removeClass('menu-clicked');
            menuOverlay.removeClass('on-overlay');
            menuWrapper.removeClass('opened-nav');
        }
        document.addEventListener('click', closeNav);
        
        var menuTitle = '';
        $('.menu-item').mouseenter(function(){
            menuTitle = $(this).attr('data-title');
            $('.overlay-title').text(menuTitle);
            
        });
        $('.menu-item').mouseleave(function(){
            $('.overlay-title').text('');
            
        });
        
//        stickyNav();
        $(window).scroll(function () {
//            stickyNav();
        });

    });
})(jQuery);