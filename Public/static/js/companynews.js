var profiel_carousel = new Swiper('#profiel_carousel', {
            // autoplay: true,//可选选项，自动滑动
            spaceBetween: 10,
            slidesPerView: 3,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            // direction : 'vertical',
        })    
//公司概况右侧大图
var CarouselR = new Swiper('#CarouselR', {
                    autoplay: true,
                    initialSlide: 2,
                    loop: true,
                    effect: 'fade',
                    thumbs: {
                        swiper: profiel_carousel
                    }
                })


var galleryThumbs = new Swiper('#gallery-thumbs', {
                        spaceBetween: 10,
                        slidesPerView: 4,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        // freeMode: true,
                        watchSlidesVisibility: true,
                        watchSlidesProgress: true,
                        direction: 'vertical',
                    });
var galleryTop = new Swiper('#gallery-top', {
                    spaceBetween: 10,
                    thumbs: {
                        swiper: galleryThumbs
                    }
                });




    $(function() {
        //设置时间轴
        setDateAxis();
        // // 跳转
        tootleTab();
        // $('#myTab a[href="#profile"]').tab('show');

        setTimeout(function() {
            var galleryThumbs = new Swiper('#gallery-thumbs', {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                direction: 'vertical',
            });
            var galleryTop = new Swiper('#gallery-top', {
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs
                }
            });
        }, 2000);

        var profiel_text = new Swiper('#profiel_text', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });





    });


    // 公司概况的  设置点击 放大事件
    function changeB(dom) {
        alert(dom);
    }



