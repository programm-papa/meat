$(() => {
    let mainpageSlider = new Swiper('.mainpage .block-3 .swiper', {
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 28,
        freeMode: true,
        mousewheel: {
            forceToAxis: true
        },
        on: {
            init: function() {
                let slides = $(this.$wrapperEl).find('.swiper-slide');
                if (window.innerWidth >= 1440)
                    slides.slice(-Math.floor(slides.length / 2)).css('transform', 'translateY(-248px)');
            }
        },
        breakpoints: {
            1440: {
                direction: 'vertical',
                centeredSlides: false,
                loop: false,
                spaceBetween: 28,
                grid: {
                    rows: 2,
                    fill: 'row'
                }
            },
            1080: {
                direction: 'vertical',
                centeredSlides: false,
                loop: false,
                spaceBetween: 42
            },
            768: {
                direction: 'vertical',
                centeredSlides: false,
                loop: false
            }
        }
    });

    let mainpageBlock4Slider = new Swiper('.mainpage .block-4 .swiper', {
        slidesPerView: 'auto',
        spaceBetween: 28,
        freeMode: true,
        mousewheel: {
            forceToAxis: true
        }
    });

    let aboutPageSlider1 = new Swiper('.about-page .tab-content-wrap .tab-content.first .block-5 .swiper', {
        slidesPerView: 'auto',
        spaceBetween: 8,
        loop: true,
        centeredSlides: true,
        mousewheel: {
            forceToAxis: true
        },
        navigation: {
            prevEl: '.about-page .tab-content-wrap .tab-content.first .block-5 .title-wrap .arrow.l',
            nextEl: '.about-page .tab-content-wrap .tab-content.first .block-5 .title-wrap .arrow.r',
        },
        breakpoints: {
            1080: {
                spaceBetween: 28
            },
            768: {
                spaceBetween: 14,
                centeredSlides: false
            }
        }
    });

    let aboutPageSlider2 = $('.about-page .tab-content-wrap .tab-content.fourth .slider-wrap .swiper');
    aboutPageSlider2.each((i, el) => new Swiper(el, {
        slidesPerView: 'auto',
        spaceBetween: 28,
        freeMode: true,
        mousewheel: {
            forceToAxis: true
        },
    }));

    let productPageSlider = new Swiper('.product-page .info-wrap .slider-wrap .swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            prevEl: '.slider-wrap .arrow.l',
            nextEl: '.slider-wrap .arrow.r'
        }
    });

    let mainpageBlock6Btn = $('.mainpage .block-6 .scheme-wrap .links-column .btn-wrap');
    mainpageBlock6Btn.click(e => {
        let $this = $(e.currentTarget);
        $this.toggleClass('opened').next().slideToggle();
        return false;
    });

    $('.mainpage .block-6 .scheme-wrap .scheme-column svg path').click(e => {
        let $this = $(e.currentTarget),
            index = $this.index();
        $this.addClass('current').siblings().removeClass('current');
        $this.parents('.scheme-column').find('.info-wrap').hide().eq(index).fadeIn({
            start: function() {
                $(this).css('display', 'flex');
            }
        });
        if ($this.hasClass('with-star'))
            mainpageBlock6Btn.addClass('opened').next().slideDown();
    });

    $('.mainpage .block-10 .list-wrap .item').click(e => {
        let $this = $(e.currentTarget),
            index = $this.index();
        $this.hide().siblings(':not(:visible)').fadeIn({
            start: function() {
                $(this).css('display', 'flex');
            }
        });
        $('.mainpage .block-10 .review-wrap .review').hide().eq(index).fadeIn();
        return false;
    });

    $('.mainpage .block-11 .contacts-wrap .address').click(e => {
        let $this = $(e.currentTarget),
            coords = $this.data('center').split(',');
        $this.addClass('current').siblings().removeClass('current');
        map.setCenter([coords[0], coords[1]]);
        return false;
    });

    $('.product-card .desc-wrap .to-cart-wrap .to-cart-link').click(e => {
        let $this = $(e.currentTarget);
        $this.hide().next().fadeIn({
            start: function() {
                $(this).css('display', 'flex');
            }
        });
        return false;
    });

    $('.product-card .desc-wrap .to-cart-wrap .to-cart .btn,' +
        '.product-page .info-wrap .info .desc-wrap .to-cart-wrap .amount-wrap .btn,' +
        '.cart-page .columns-wrap .left .items-list .cart-item .desc-wrap .price-wrap .amount .btn,' +
        '.cart-page .columns-wrap .left .items-list .cart-item .desc-wrap .amount-wrap .amount .btn,' +
        '.cart-btn-wrapper .cart-info-popup .cart-info-content .cart-item .cart-item__amount .btn').click(e => {
        let $this = $(e.currentTarget);
        $this.siblings().val((i, val) => $this.hasClass('minus') ? (val === '1' ? 1 : --val) : ++val);
        return false;
    });

    let productPageThumbs = $('.product-page .info-wrap .img-wrap .thumbs-wrap .item');
    productPageThumbs.click(e => {
        let $this = $(e.currentTarget),
            index = productPageThumbs.index($this);
        $this.addClass('current').siblings().removeClass('current');
        $('.product-page .info-wrap .img-wrap .img img').removeClass('current').eq(index).addClass('current');
        return false;
    });

    let tabs = $('.product-page .tabs-wrap .tab, .about-page .tabs-wrap .tab');
    tabs.click(e => {
        let $this = $(e.currentTarget),
            index = tabs.index($this);
        $this.addClass('current').siblings().removeClass('current');
        $('.tab-content').hide().eq(index).fadeIn();
        return false;
    });

    $('.product-page .info-wrap .info .desc-wrap .qm, .tooltip .close').click(() => {
        $('.tooltip').toggleClass('opened');
        return false;
    });

    $('.input-wrap .select-wrap .select').click(e => {
        let $this = $(e.currentTarget);
        $this.toggleClass('opened');
    });

    $('.input-wrap .select-wrap .dd-wrap .item').click(e => {
        let $this = $(e.currentTarget),
            value = $this.text();
        $this.parent().prev().removeClass('opened').find('.value').text(value);
        $this.addClass('current').siblings().removeClass('current');
        return false;
    });

    $('[maxlength]').on('keyup paste change', e => {
        let $this = $(e.currentTarget),
            maxlength = $this.prop('maxlength');
        $this.parent().next().text(maxlength - $this.val().length);
    });

    $('.input-wrap .stars-wrap svg').click(e => {
        let $this = $(e.currentTarget);
        $this.addClass('current').siblings().removeClass('current');
    });

    $('.catalog-page .filters-btn').click(e => {
        let $this = $(e.currentTarget);
        $this.toggleClass('opened');
        return false;
    });

    $('.reviews-page .columns-wrap .right .btn, .product-page .tab-content-wrap .tab-content.reviews .columns-wrap .right .btn').click(e => {
        let $this = $(e.currentTarget),
            form = $this.parent().prev();
        if (window.innerWidth < 1080 && !form.is(':visible')) {
            form.slideDown();
            return false;
        }
    });

    $('.menu-btn').click(e => {
        let $this = $(e.currentTarget);
        $this.add('.header-menu').toggleClass('opened');
        return false;
    });

    $('.success-popup .close-btn, .success-popup .x').click(() => {
        $('.success-popup').removeClass('opened');
        return false;
    });

    $('html').click(e => {
        let target = $(e.target);
        if (!target.parents('.tooltip').length && !target.hasClass('tooltip'))
            $('.tooltip').removeClass('opened');
        if (!target.parents('.select').length && !target.hasClass('select'))
            $('.select').removeClass('opened');
        if (!target.parents('.left').length && !target.hasClass('left'))
            $('.catalog-page .filters-btn').removeClass('opened');
        if (!target.parents('.header-menu').length && !target.hasClass('header-menu'))
            $('.header .menu-btn, .header-menu').removeClass('opened');
    });

    $('[type="tel"]').mask('+7 (999) 999-99-99');

    lightbox.option({
        albumLabel: 'Изображение %1 из %2'
    });

    //Скрипт обрботчик Фиксированного положения блока в корзине относительно другого
    if ($('.cart-page .columns-wrap').length > 0 && $(window).width() >= 1080) {
        fixInBlock();
        $(document).scroll(fixInBlock);
        //Функция фиксации одного блока в другом
        function fixInBlock() {
            if ($('.cart-page .columns-wrap .left').height() > $('.cart-page .columns-wrap .right').height()) {
                $('.cart-page .columns-wrap .right').css({ 'position': 'absolute' });
            }
            if ($(window).scrollTop() > $('.cart-page .columns-wrap .left').offset().top) {
                if ($(window).scrollTop() + $('.cart-page .columns-wrap .right').height() + 30 >= $('.cart-page .columns-wrap .left').offset().top + $('.cart-page .columns-wrap .left').height()) {
                    $('.cart-page .columns-wrap .right').css({ 'bottom': '0px', 'top': 'auto' });
                } else {
                    $('.cart-page .columns-wrap .right').css({ 'top': $(window).scrollTop() - $('.cart-page .columns-wrap .left').offset().top + 30, 'bottom': 'auto' });
                }

            } else if ($(window).scrollTop() < $('.cart-page .columns-wrap .left').offset().top) {
                $('.cart-page .columns-wrap .right').css({ 'top': '30px', 'bottom': 'auto' });
            }
        }
    }
    $('.cart-info-popup').click(function(event) {
        event.stopPropagation();
    });

    //Скрипт фиксированного headers на странице
    fixHeader();
    $(document).scroll(fixHeader);

    function fixHeader() {
        if ($(window).width() >= 1080) {
            if ($(window).scrollTop() > 18) {
                if (!$('.menu-wrap').hasClass('fixed')) {
                    $('.menu-wrap').addClass('fixed');
                }
            } else {
                if ($('.menu-wrap').hasClass('fixed')) {
                    $('.menu-wrap').removeClass('fixed');
                }
            }
        }
    }
});