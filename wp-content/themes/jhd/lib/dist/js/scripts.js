$(document).ready(function(){

    // Product Items - This is not good, we need to remove blank paragraphs within wordpress.

    if($('.product-items').length > 0){
        // Trimming white space
        $('.product-items .copy p').filter(function () { return $.trim(this.innerHTML) == "" }).remove();

        // Without trimming white space
        $('.product-items .copy p').filter(function () { return this.innerHTML == "" }).remove();
    }

    // Recent Work
    if ($('.recent-work-gallery').length > 0) {
        recentWork();
    }

    // Quotes
    if ($('.module-case-studies').length > 0) {
        $('.module-case-studies .quote').carouFredSel({
            responsive: true,      // Determines whether the carousel should be responsive. If true, the items will be resized to fill the carousel.
            height: 'variable',
            pagination: {
                container: '.module-case-studies .pager'
            },
            items: {
                height: 'variable',
                visible: 1
            },
            scroll: {
                easing: "swing",
                duration: 1000,
                pauseOnHover: true
            }
        });
    }


    $(window).resize(function(){
        // Recent Work
        if ($('.recent-work-gallery').length > 0) {
            recentWork();
        }

        // Portfolio Mini Gallery
        if ($('.portfolio-mini-gallery').length > 0) {
            portfolio();
            magnifyResizer();
        }
    });

    $(".fancybox").fancybox({
        helpers: {
            title : {
                type : 'float'
            }
        }
    });

});

$(window).load(function(){
    // Portfolio Mini Gallery
    if ($('.portfolio-mini-gallery').length > 0 && $(window).width() > 767) {
        portfolio();
    }

    // Portfolio Mini Gallery
    if ($('.portfolio-mini-gallery').length > 0) {
        magnifyResizer();
    }

});

// Recent Gallery - Makes the span element the same width and height as the image

function recentWork() {
    var recentImage = $('.recent-work-gallery img').width();
    $('.recent-work-gallery li a span').width(recentImage);
}

// Portfolio - Makes the span element the same width and height as the image - a duplication of the same effect of recent work

function portfolio() {
    if($(window).width() > 767) {
        $('.module-portfolio ul').carouFredSel({
            responsive: true,
            height: 'variable',
            prev: {
                button: '.module-portfolio .left'
            },
            next: {
                button: '.module-portfolio .right'
            },
            pagination: {
                container: '.module-portfolio .pager'
            },
            items: {
                height: 'variable',
                visible: 4
            },
            scroll: {
                easing: "swing",
                duration: 1000,
                pauseOnHover: true
            }
        });
    } else {
        $(".module-portfolio ul").trigger("destroy", true);
    }
}

// Magnifying glass sizer

function magnifyResizer() {
    var portfolio = $('.portfolio-mini-gallery img').width();
    $('.portfolio-mini-gallery li a span').width(portfolio);
}