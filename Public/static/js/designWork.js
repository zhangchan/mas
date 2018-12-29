$(function() {
    // 设置购物中心的的图片
    setShopngCent();
    //设置购物中心的动画效果
    setShoppingCcenterItemAnima();
});

// 设置购物中心的的图片
function setShopngCent() {
    var height = $("#shoppingCcenter").height() * 9 / 10;
    var width = $("#shoppingCcenter").width();
    if (height * 5 < 2 * width) {
        console.log("height--", height);
        console.log("height * 5/2", height * 5 / 2);
        $(".shoppingCcenterCent").width(height * 5 / 2);
    } else {
        $(".shoppingCcenterCent").height(400);
    }
}

//设置购物中心的动画效果
function setShoppingCcenterItemAnima() {
    $(".shoppingCcenterItem").hover(function() {
        $(this).find(".shade").addClass("shadeOn");
    }, function() {
        $(this).find(".shade").removeClass("shadeOn");
    });
}



$(function() {
    // 跳转
    tootleTab();
    setTimeout(function() {
        var profiel_text = new Swiper('#designCarsoul', {
            // speed: 300,
            // direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });
    }, 5000);
});