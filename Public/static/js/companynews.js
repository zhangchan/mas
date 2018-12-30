    $(function() {
        //设置时间轴
        setDateAxis();
        // 跳转
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

        var profiel_carousel = new Swiper('#profiel_carousel', {
            // autoplay: true,//可选选项，自动滑动
            spaceBetween: 10,
            slidesPerView: 3,
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

    });


    // 公司概况的  设置点击 放大事件
    function changeB(dom) {
        alert(dom);
    }


    // 设置 新闻列表的点击事件
    function openNews(dom) {
        // alert(dom);
        $("#newsSwiper").hide();
        $(".newsDetail").show();
    }


    //设置时间轴
    function setDateAxis() {
        console.log(222223333)
        var moveH; //移动距离
        var isbackTop = false; // 是否返回顶部
        console.log(222223333)
        $(".item").hover(function() {
            console.log(1111111)
            $(".contentItem").hover(function() {
                console.log(22222)
                moveH = $(this).position().top;
                $(this).find(".contentTitle").addClass("contentTitleActive");
                $(this).parent(".item").find(".time").animate({
                    top: moveH
                }, 0)
            }, function() {
                $(this).find(".contentTitle").removeClass("contentTitleActive");
            });
        }, function() {
            moveH = 0;
            $(this).find(".time").animate({
                top: moveH
            }, 0)

        });



    }

    //设置新闻列表  各个的间距   ( 一页显示 3行 )
    function setNewListInterNal() {
        const containerH = $("#newsSwiper").height();
        const itemH = $("#newsSwiper .item").height();

    }



    document.addEventListener('DOMContentLoaded', function (event) {
            // chrome 浏览器直接加上下面这个样式就行了，但是ff不识别
            document.body.style.zoom = 'reset';
            document.addEventListener('keydown', function (event) {
                if ((event.ctrlKey === true || event.metaKey === true)
                && (event.which === 61 || event.which === 107
                    || event.which === 173 || event.which === 109
                    || event.which === 187  || event.which === 189))
                    {
                       event.preventDefault();
                    }
            }, false);
            document.addEventListener('mousewheel DOMMouseScroll', function (event) {
                if (event.ctrlKey === true || event.metaKey) {
                    event.preventDefault();
                }
            }, false);
        }, false);