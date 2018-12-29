$(function () {
    //设置延时器，3秒后，去掉loading的加载状态
    setTimeout(function(){
        $(".loading").hide();
    },3000);
   // 设置 “cooperate” 标题的宽高
    setHeight();
    //设置合伙人 的动画效果
    designAnima();
});

// 设置 “cooperate” 标题的宽高
function  setHeight() {
    var height = $("#designPic").height();
    var width = $("#designPic").width();
    if( height < width){
        $("#designCont").height( height );
        $("#designCont").width( height * 5/3 );
    }
}

//设置合伙人 的动画效果
function  designAnima(){
    //默认设置每个图片为灰色，
    grayscale($(".designItem img"));

    //鼠标移入变亮。移出变灰
    $(".designItem").hover(function(){
        grayscale.reset($(this).find("img"));
        $(this).find(".textOpcityItem").addClass('textOpcity');
    },function () {
        grayscale($(this).find("img"));
        $(this).find(".textOpcityItem").removeClass('textOpcity');
    });
}

tootleTab();