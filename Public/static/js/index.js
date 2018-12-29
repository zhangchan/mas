autoheight('s-img');
function autoheight(o) {
    var winHeight = 0;
    if (window.innerHeight)
        winHeight = window.innerHeight;
    else if ((document.body) && (document.body.clientHeight))
        winHeight = document.body.clientHeight;
    if (document.documentElement && document.documentElement.clientHeight)
        winHeight = document.documentElement.clientHeight;
    document.getElementById(o).style.height = winHeight + "px";
}
window.onresize = autoheight; //浏览器窗口发生变化时同时变化DIV高度
$(function() {
    // 设置下拉列表 改成 hover 下拉显示
    $(document).off('click.bs.dropdown.data-api');

    $(".dropdown").mouseover(function() {
        $(this).addClass("open");
    }).mouseleave(function() {
        $(this).removeClass("open");
    });
    // 设置下拉列表 改成 hover 下拉显示
    var firstCarsoul = ["images/firstCarsoul/first_1.png", "images/firstCarsoul/first_2.png", "images/firstCarsoul/first_3.png"]; // 如果后台没有传回来数据显示本地的轮播图片
    var defaultPic = 'images/defaultPic.jpg';

    $("#lang input").change(function() {
        console.log($("#lang input[name='inlineRadioOptions']:checked ").val());
    });
});