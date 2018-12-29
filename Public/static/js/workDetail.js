var profiel_text = new Swiper('#programSwiper', {
    // speed: 300,
    direction: 'vertical',
    slidesPerView: 'auto',
    freeMode: true,
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    mousewheel: true,
});
var galleryThumbs = new Swiper('#gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    direction: 'vertical',
});
var galleryTop = new Swiper('#gallery-top', {
    direction: 'vertical',
    spaceBetween: 10,
    thumbs: {
        swiper: galleryThumbs
    }
});

