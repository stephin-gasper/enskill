window.enskillForms = (function ($) {

    function init() {

        $('.input-tatb-field').each(function (index, elem) {
            // in case the input is already filled..
            if (elem.value.trim() !== '') {
                $(elem).parent().addClass('input-tatb-filled');
            }
        });
        $('.input-tatb-field').focus(function () {
            $(this).parent().addClass('input-tatb-filled');
        });
        $('.input-tatb-field').blur(function () {
            if (this.value.trim() === '') {
                $(this).parent().removeClass('input-tatb-filled');
            }
        });
    }

    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function () {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function () {
                return this.replace(rtrim, '');
            };
        })();
    }

    return {
        init: init
    };

})(jQuery);

(function ($) {
    $(document).ready(function () {
        $('.tab-head-item').click(function () {
            $('.tab-head-item').removeClass('tab-head-active');
            $(this).addClass('tab-head-active');
            $('.tab-content').removeClass('tab-content-active tab-content-active-resp');
            $($(this).attr('data-tab-content')).addClass('tab-content-active tab-content-active-resp');
        });
        $('.tab-head-item-resp').click(function () {
            $('.tab-head-item-resp').removeClass('tab-head-active-resp');
            $(this).addClass('tab-head-active-resp');
            $('.tab-content').removeClass('tab-content-active tab-content-active-resp');
            $($(this).attr('data-tab-content')).addClass('tab-content-active tab-content-active-resp');
        });
        window.enskillForms.init();
    });
})(jQuery);