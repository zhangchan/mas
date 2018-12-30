// 实现 鼠标移入 下拉框，则对应的nav 选项 添加 hover 效果
$(".head .dropdown-menu").mouseenter(function() {

    var blockL = $("<div id='blockL' style='position:absolute;background: #fff;width: 4px;top: 10px;height: 15px;left: -4px;'></div>");
    var blockR = $("<div id='blockR' style='position:absolute;background: #fff;width: 4px;top: 10px;height: 15px;right: -4px;'></div>");

    $(this).parent("li").children("a").addClass("choose");

    $(this).parent("li").prepend(blockL);
    $(this).parent("li").append(blockR);

}).mouseleave(function() {
    $(this).parent("li").children("a").removeClass("choose");
    $("#blockL").remove();
    $("#blockR").remove();
});

// 设置下拉列表 改成 hover 下拉显示
$(document).off('click.bs.dropdown.data-api');

$(".dropdown").mouseover(function() {
    $(this).addClass("open");
}).mouseleave(function() {
    $(this).removeClass("open");
});
// 设置下拉列表 改成 hover 下拉显示

$("#lang input").change(function() {
    console.log($("#lang input[name='inlineRadioOptions']:checked ").val());
});


// 通过url的锚点，
function tootleTab() {

    const tabUrl = location.href.split("?")[1];

    if (tabUrl) {
        const tabid = tabUrl.split("=")[1];

        $('#myTab a[href="#' + tabid + '"]').tab('show');

        profiel_carousel = null;
        CarouselR = null;

        profiel_carousel = new Swiper('#profiel_carousel', {
            // autoplay: true,//可选选项，自动滑动
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            // direction : 'vertical',
        })

        //公司概况右侧大图
        CarouselR = new Swiper('#CarouselR', {
            autoplay: true,
            initialSlide: 2,
            loop: true,
            effect: 'fade',
            thumbs: {
                swiper: profiel_carousel
            }
        })
    }
    return false;


}