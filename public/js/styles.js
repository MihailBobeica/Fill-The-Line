function setRoundBorderRadiusTo(selector) {
    $(selector).each(function() {
        $(this).css('border-radius', $(this).outerHeight(true) * 0.5 + 'px');
    });
}
