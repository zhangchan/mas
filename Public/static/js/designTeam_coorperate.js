$(function () {
   // 设置 “cooperate” 标题的宽高
   //  setHeight();
    //设置合伙人 的动画效果
    designAnima();
});

// 设置 “cooperate” 标题的宽高
function  setHeight() {
    var height = $("#designPic").height();
    var width = $("#designPic").width();
    if( height < width){
        $("#designCont").height( height );
        $("#designCont").width( height * 6/3 );
    }
}

//设置合伙人 的动画效果
function  designAnima(){
    //默认设置每个图片为灰色，
    grayscale($(".designCont img"));

    //鼠标移入变亮。移出变灰
    $(".design-col").hover(function(){
        grayscale.reset($(this).find("img"));
        $(this).find(".design-text-container").addClass('textOpcity');
    },function () {
        grayscale($(this).find("img"));
        $(this).find(".design-text-container").removeClass('textOpcity');
    });
}


$(function () {
    var profiel_text = new Swiper('#cooperateList', {
            // speed: 300,
            // direction: 'vertical',
            slidesPerView: 'auto',
           freeMode: true,
           scrollbar: {
               el: '.swiper-scrollbar',
           },
           mousewheel: true,
       });
});