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

